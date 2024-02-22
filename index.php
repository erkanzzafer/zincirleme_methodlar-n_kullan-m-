<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Bicimlendir
    {

        public $yazi;
        public $stil;

        public function Metin($metinDegeri)
        {
            $this->yazi = $metinDegeri;
            return $this;
        }

        public function Renk($renkDegeri)
        {
            $this->stil = "color:".$renkDegeri .  ";";
            return $this;
        }

        public function Boyut($boyutDegeri)
        {
            $this->stil .=  "font-size:".$boyutDegeri;
            return $this;
        }

        public function Olustur()
        {
         //   return $this->yazi . "</br>" . $this->stil;
            return  "<div style='" . $this->stil . "'>" . $this->yazi . "</div>";
        }
    }

    $sonuc = new Bicimlendir();
    echo $sonuc->Metin("zafer erkan")->Renk("red")->Boyut("20px")->Olustur();
    ?>
</body>

</html>