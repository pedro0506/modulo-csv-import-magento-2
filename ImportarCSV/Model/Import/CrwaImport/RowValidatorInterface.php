<?php
namespace Crwa\ImportarCSV\Model\Import\CrwaImport;
 
interface RowValidatorInterface extends \Magento\Framework\Validator\ValidatorInterface
{
    const ERROR_INVALID_TITLE = 'InvalidValueTITLE';
    const ERROR_ID_IS_EMPTY = 'Empty';
 
    /**
     * Initialize validator
     *
     * @return $this
     */
    public function init($context);
}