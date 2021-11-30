$this->sortArr($data, 'subField', SORT_DESC, 'subfield2');

private function sortArr(&$array, $subfield, $ascDesc, $subfield2 = '')
    {
        $sortarray = array();
        foreach ($array as $key => $row) {
            if ($subfield2)
                $sortarray[$key] = $row[$subfield][$subfield2];
            else
                $sortarray[$key] = $row[$subfield];
        }

        array_multisort($sortarray, $ascDesc, $array);
    }
