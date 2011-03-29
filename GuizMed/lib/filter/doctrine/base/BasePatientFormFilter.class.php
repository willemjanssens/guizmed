<?php

/**
 * Patient filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePatientFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Naam'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Voornaam'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Geslacht'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'Geboortedatum'    => new sfWidgetFormFilterInput(),
      'Medicatiescheme'  => new sfWidgetFormFilterInput(),
      'Opmerkingen'      => new sfWidgetFormFilterInput(),
      'Voorgeschiedenis' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'Naam'             => new sfValidatorPass(array('required' => false)),
      'Voornaam'         => new sfValidatorPass(array('required' => false)),
      'Geslacht'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'Geboortedatum'    => new sfValidatorPass(array('required' => false)),
      'Medicatiescheme'  => new sfValidatorPass(array('required' => false)),
      'Opmerkingen'      => new sfValidatorPass(array('required' => false)),
      'Voorgeschiedenis' => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('patient_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Patient';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'Naam'             => 'Text',
      'Voornaam'         => 'Text',
      'Geslacht'         => 'Boolean',
      'Geboortedatum'    => 'Text',
      'Medicatiescheme'  => 'Text',
      'Opmerkingen'      => 'Text',
      'Voorgeschiedenis' => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
