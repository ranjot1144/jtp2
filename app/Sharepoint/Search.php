<?php

namespace App\Sharepoint;

class Search
{
   /**
    * Searches the FindBatchSheet
    *
    * @param iterable $sheets
    * @param string $batchcode
    * @return array|null
    */
    public static function FindBatchBySheet(iterable $sheets, string $batchcode): ?array
    {

        
        foreach ($sheets as $sheet) {
            foreach ($sheet->getSheetIterator() as $key => $tab) {
                $headers = [];
                foreach ($tab->getRowIterator() as $rkey =>$row) {
                   if($rkey!==1){
                    $narr = [];
                    $narr['tab'] = $tab->getName();
                    foreach($headers as $hkey => $header){
                        if(isset( $row->GetCells()[$hkey])){
                        $value =  $row->GetCells()[$hkey]->getValue();

                        if($value instanceof \DateTime){
                            $narr[$header] = $value->format('d/m/Y');
                        }else {
                            $narr[$header] = $value;

                        }

                        }else{
                            $narr[$header] = "";
                        }
                }

                foreach($narr as $ikey => $item){
                        if($ikey=="Finished Product Batch No."){
                            if($item==$batchcode){
                                return $narr;
                            }
                        }
                }
                
                   }else {
                    foreach($row->GetCells() as $ikey => $cell){
                        if(!empty($cell->getValue())){
                            $headers[$ikey] = $cell->getValue();
                        }   
                    }
                   }
              
                    
                }

            }
        }
        return null;
    }
}
