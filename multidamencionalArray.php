        $uniqueData = array();

        //Get unique data from multidimensional array
        foreach ($multArray as $k => $data) {
            array_push($uniqueData, $multArray["NR_DOC"]);           
        }

        //Second multidimensional array
        foreach ($secondMultArray as $y => $data) {
            if(!in_array($data["acp_id"], $uniqueData)){
                array_push($uniqueData, $data["acp_id");
            }
        }

        return $uniqueData;
