<?php
$random = htmlspecialchars($_GET["random"]);
if (!$random)
{
    echo "check page, enter number from 1-23213 http://random.geulah.org.il/check/?random=x";
}
else if (($random > 23213) | ($random < 1))
{
    echo "check page, use number only from 1-23213";
}
else
{

    $file = '../letteris_utf8.txt';

    $word = $random . "0";
    $searchfor = "\t" . $word . "\t";

    $contents = file_get_contents($file);
    $pattern = preg_quote($searchfor, '/');
    $pattern = "/^.*$pattern.*\$/m";
    if (preg_match_all($pattern, $contents, $matches))
    {
        $result = implode("\n", $matches[0]);
        list($bk, $ch, $vr, $ax, $value, $verse) = explode("\t", $result);

        $book = rtrim($bk, "O");
        switch ($book)
        {
            case "30":
                $fullbook = "Amos";
                $shortbook = "Am";
                $hebbook = "עמוס";
            break;
            case "27":
                $fullbook = "Daniel";
                $shortbook = "Dan";
                $hebbook = "דניאל";
            break;
            case "05":
                $fullbook = "Deuteronomy";
                $shortbook = "Deut";
                $hebbook = "דברים";
            break;
            case "17":
                $fullbook = "Esther";
                $shortbook = "Esth";
                $hebbook = "אסתר";
            break;
            case "02":
                $fullbook = "Exodus";
                $shortbook = "Ex";
                $hebbook = "שמות";
            break;
            case "26":
                $fullbook = "Ezekiel";
                $shortbook = "Ezek";
                $hebbook = "יחזקאל";
            break;
            case "15":
                $fullbook = "Ezra";
                $shortbook = "Ezra";
                $hebbook = "עזרא";
            break;
            case "01":
                $fullbook = "Genesis";
                $shortbook = "Gen";
                $hebbook = "בראשית";
            break;
            case "35":
                $fullbook = "Habakkuk";
                $shortbook = "Hab";
                $hebbook = "חבקוק";
            break;
            case "37":
                $fullbook = "Haggai";
                $shortbook = "Hag";
                $hebbook = "חגי";
            break;
            case "28":
                $fullbook = "Hosea";
                $shortbook = "Hos";
                $hebbook = "הושע";
            break;
            case "13":
                $fullbook = "1 Chronicles";
                $shortbook = "1Chr";
                $hebbook = "דברי הימים א'";
            break;
            case "11":
                $fullbook = "1 Kings";
                $shortbook = "1Kings";
                $hebbook = "מלכים א'";
            break;
            case "09":
                $fullbook = "1 Samuel";
                $shortbook = "1Sam";
                $hebbook = "שמואל א'";
            break;
            case "14":
                $fullbook = "2 Chronicles";
                $shortbook = "2Chr";
                $hebbook = "דברי הימים ב'";
            break;
            case "12":
                $fullbook = "2 Kings";
                $shortbook = "2Kings";
                $hebbook = "מלכים ב'";
            break;
            case "10":
                $fullbook = "2 Samuel";
                $shortbook = "2Sam";
                $hebbook = "שמואל ב'";
            break;
            case "23":
                $fullbook = "Isaiah";
                $shortbook = "Isa";
                $hebbook = "ישעיה";
            break;
            case "24":
                $fullbook = "Jeremiah";
                $shortbook = "Jer";
                $hebbook = "ירמיה";
            break;
            case "18":
                $fullbook = "Job";
                $shortbook = "Job";
                $hebbook = "איוב";
            break;
            case "29":
                $fullbook = "Joel";
                $shortbook = "Joel";
                $hebbook = "יואל";
            break;
            case "32":
                $fullbook = "Jonah";
                $shortbook = "Jon";
                $hebbook = "יונה";
            break;
            case "06":
                $fullbook = "Joshua";
                $shortbook = "Josh";
                $hebbook = "יהושע";
            break;
            case "07":
                $fullbook = "Judges";
                $shortbook = "Judg";
                $hebbook = "שופטים";
            break;
            case "21":
                $fullbook = "Ecclesiastes";
                $shortbook = "Eccl";
                $hebbook = "קהלת";
            break;
            case "25":
                $fullbook = "Lamentations";
                $shortbook = "Lam";
                $hebbook = "איכה";
            break;
            case "03":
                $fullbook = "Leviticus";
                $shortbook = "Lev";
                $hebbook = "ויקרא";
            break;
            case "39":
                $fullbook = "Malachi";
                $shortbook = "Mal";
                $hebbook = "מלאכי";
            break;
            case "33":
                $fullbook = "Micah";
                $shortbook = "Mic";
                $hebbook = "מיכה";
            break;
            case "34":
                $fullbook = "Nahum";
                $shortbook = "Nah";
                $hebbook = "נחום";
            break;
            case "16":
                $fullbook = "Nehemiah";
                $shortbook = "Neh";
                $hebbook = "נחמיה";
            break;
            case "04":
                $fullbook = "Numbers";
                $shortbook = "Num";
                $hebbook = "במדבר";
            break;
            case "31":
                $fullbook = "Obadiah";
                $shortbook = "Ob";
                $hebbook = "עובדיה";
            break;
            case "20":
                $fullbook = "Proverbs";
                $shortbook = "Prov";
                $hebbook = "משלי";
            break;
            case "19":
                $fullbook = "Psalms";
                $shortbook = "Ps";
                $hebbook = "תהילים";
            break;
            case "08":
                $fullbook = "Ruth";
                $shortbook = "Ruth";
                $hebbook = "רות";
            break;
            case "22":
                $fullbook = "Song of songs";
                $shortbook = "Song";
                $hebbook = "שיר השירים";
            break;
            case "38":
                $fullbook = "Zechariah";
                $shortbook = "Zech";
                $hebbook = "זכריה";
            break;
            case "36":
                $fullbook = "Zephaniah";
                $shortbook = "Zeph";
                $hebbook = "צפניה";
            break;
        }

        $b = " ספר:";
        $c = " פרק:";
        $v = " פסוק:";
        $white = array(
            "\t",
            "\n",
            "\r",
            "\0",
            "\x0B"
        );
        $numbers = " O0123456789";
        $pasuk = str_replace($white, " ", $verse);
        $pasuk = trim($pasuk, $numbers);
        echo $pasuk;
    }
}

?>
