<?php
require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/vendor/swiftmailer/swift_required.php';
require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('mpRealityAdminPlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfDoctrineActAsSignablePlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfContactFormPlugin');
  }
}
