<?php 
 class FckHelper extends AppHelper {
    var $InstanceName;
    var $InstanceId;
    var $BasePath;
    var $Width;
    var $Height;
    var $ToolbarSet;
    var $Config;
    var $Value;
    var $Error;

    function __construct() {
	
		$current_page = preg_split('^/^',$_SERVER['PHP_SELF']);
		$path = array();
		foreach($current_page as $val) {
			if ($val == APP_DIR) break;
			else if (!empty($val)) $path[] = $val;
		}
		$path = implode('/',$path);
		$path =  (!empty( $path)) ? '/' . $path : $path;
		
		$this->BasePath     = $path . '/fck/fckeditor/';
	    $this->Width        = '100%';
        $this->Height       = '350';
        $this->ToolbarSet   = 'Default';
        $this->Config       = array();
    }

    function IsCompatible() {
        if ( isset( $_SERVER ) ) {
            $sAgent = $_SERVER['HTTP_USER_AGENT'] ;
        } else {
            global $HTTP_SERVER_VARS ;
            if ( isset( $HTTP_SERVER_VARS ) ) {
                $sAgent = $HTTP_SERVER_VARS['HTTP_USER_AGENT'] ;
            } else {
                global $HTTP_USER_AGENT ;
                $sAgent = $HTTP_USER_AGENT ;
            }
        }
        if ( strpos($sAgent, 'MSIE') !== false && strpos($sAgent, 'mac') === false && strpos($sAgent, 'Opera') === false ) {
            $iVersion = (float)substr($sAgent, strpos($sAgent, 'MSIE') + 5, 3) ;
            return ($iVersion >= 5.5) ;
        } else if ( strpos($sAgent, 'Gecko/') !== false ) {
            $iVersion = (int)substr($sAgent, strpos($sAgent, 'Gecko/') + 6, 8) ;
            return ($iVersion >= 20030210) ;
        } else if ( strpos($sAgent, 'Opera/') !== false ) {
            $fVersion = (float)substr($sAgent, strpos($sAgent, 'Opera/') + 6, 4) ;
            return ($fVersion >= 9.5) ;
        } else if ( preg_match( "|AppleWebKit/(\d+)|i", $sAgent, $matches ) ) {
            $iVersion = $matches[1] ;
            return ( $matches[1] >= 522 ) ;
        } else return false ;
    }

    function Create($instance) {
        $instance = explode('/', $instance);
        $this->InstanceName = 'data['.$instance[0].']['.$instance[1].']';
        $this->InstanceId   = $instance[0].Inflector::camelize($instance[1]);
        $HtmlValue = htmlspecialchars( $this->Value ) ;
        $Html = '' ;
        if ( $this->IsCompatible() ) {
            if ( isset( $_GET['fcksource'] ) && $_GET['fcksource'] == "true" )
                $File = 'fckeditor.original.html' ;
            else
                $File = 'fckeditor.html' ;
            $Link = "{$this->BasePath}editor/{$File}?InstanceName={$this->InstanceName}";
            if ( $this->ToolbarSet != '' )
                $Link .= "&amp;Toolbar={$this->ToolbarSet}" ;
            $Html .= "<input type=\"hidden\" id=\"{$this->InstanceId}\" name=\"{$this->InstanceName}\" value=\"{$HtmlValue}\" style=\"display:none\" />";
            $Html .= "<input type=\"hidden\" id=\"{$this->InstanceId}___Config\" value=\"" . $this->GetConfigFieldString() . "\" style=\"display:none\" />";
            $Html .= "<iframe id=\"{$this->InstanceId}___Frame\" src=\"{$Link}\" width=\"{$this->Width}\" height=\"{$this->Height}\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        } else {
            if ( strpos( $this->Width, '%' ) === false )
                $WidthCSS = $this->Width . 'px';
            else
                $WidthCSS = $this->Width;
            if ( strpos( $this->Height, '%' ) === false )
                $HeightCSS = $this->Height . 'px' ;
            else
                $HeightCSS = $this->Height ;
            $Html .= "<textarea name=\"{$this->InstanceName}\" id=\"{$this->InstanceId}\" rows=\"4\" cols=\"40\" style=\"width: {$WidthCSS}; height: {$HeightCSS}\">{$HtmlValue}</textarea>" ;
        }
        if ( !empty( $this->Error ) ) {
            $Html .= '<div class="error-message">'.$this->Error.'</div>';
        }
        return $Html ;
    }

    function GetConfigFieldString() {
        $sParams = '' ;
        $bFirst = true ;
        foreach ( $this->Config as $sKey => $sValue ) {
            if ( $bFirst == false )
                $sParams .= '&amp;' ;
            else
                $bFirst = false ;
            if ( $sValue === true )
                $sParams .= $this->EncodeConfig( $sKey ) . '=true' ;
            else if ( $sValue === false )
                $sParams .= $this->EncodeConfig( $sKey ) . '=false' ;
            else
                $sParams .= $this->EncodeConfig( $sKey ) . '=' . $this->EncodeConfig( $sValue ) ;
        }
        return $sParams ;
    }

    function EncodeConfig( $valueToEncode ) {
        $chars = array(
            '&' => '%26',
            '=' => '%3D',
            '"' => '%22' ) ;
        return strtr( $valueToEncode,  $chars ) ;
    }
}
