<?php

/**
 * JobeetCategoryAffiliate form base class.
 *
 * @method JobeetCategoryAffiliate getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJobeetCategoryAffiliateForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'category_id'  => new sfWidgetFormInputHidden(),
      'affiliate_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'category_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'category_id', 'required' => false)),
      'affiliate_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'affiliate_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jobeet_category_affiliate[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JobeetCategoryAffiliate';
  }

}
