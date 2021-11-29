public function reportToTxtECsv($base, $data)
    {
        
        $filename = $base . 'my-file' . date('d-m-Y-H-i-s') . '.txt';//CSV has same structure
        $fp = fopen($filename, 'a');  

        //Fix exibition error for UTF8 on CSV e TXT:
        fwrite($fp, pack("CCC",0xef,0xbb,0xbf));                  

        foreach ($data as $model) {
            $l = '';
            $l .= 'Your lines Here . ';'; //separator, ex.: /;/-/
            $l .= $model;
            $l .= '
';
            fwrite($fp, $l);
      }
       
        fclose($fp);
        try {
            header("Content-Disposition: attachment; filename=" . $filename);
            $content = file_get_contents($filename);
            unlink($filename);
            exit($content);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }

    }
    
