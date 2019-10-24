<?php

namespace Application;

use PHPUnit\Extensions\AppiumTestCase;
use PHPUnit\Extensions\AppiumTestCase\Element;

final class CarTest extends PHPUnit_Extensions_AppiumTestCase {

  public static $browsers = array(
    array(
      "local" => true,    
      "port" => 4723,    
      "browserName" => '',    
      "desiredCapabilities" => array(
        "deviceName" => "MI5",
        "udid" => "26060fa3",
        "platformName" => "Android",
        "platformVersion" => "8.0.0",
        "appPackage" => "com.carquery.app",
        "appActivity" => "host.exp.exponent.MainActivity",
        "automationName" => "UiAutomator2",
        "appWaitForLaunch" => "false"   
      )    
    )    
  );

  public function testStuff(){
  }
}