<?php

namespace JoshMens\Elements\FourColumn\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\FieldType\DBField;

/**
 * Class ElementImage.
 */
class ElementFourColumn extends BaseElement
{
    /**
     * @var string
     */
    private static $icon = 'font-icon-columns';

    /**
     * @return string
     */
    private static $singular_name = 'Four Column';

    /**
     * @return string
     */
    private static $plural_name = 'Four Column Elements';

    /**
     * @var string
     */
    private static $table_name = 'ElementFourColumn';

    /**
     * @var array
     */
    private static $db = [
        'ColOne' => 'HTMLText',
        'ColTwo' => 'HTMLText',
        'ColThree' => 'HTMLText',
        'ColFour' => 'HTMLText'
    ];

    // /**
    //  * @var array
    //  */
    // private static $has_one = [
        
    // ];

    // /**
    //  * @var array
    //  */
    // private static $owns = [
        
    // ];

    /**
     * @return \SilverStripe\Forms\FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $ColOne = $fields->fieldByName('Root.Main.ColOne');
        $ColTwo = $fields->fieldByName('Root.Main.ColTwo');
        $ColThree = $fields->fieldByName('Root.Main.ColThree');
        $ColFour = $fields->fieldByName('Root.Main.ColFour');

        return $fields;
    }

    /**
     * @return DBHTMLText
     */
    public function getSummary()
    {
    }

    /**
     * @return array
     */
    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema['content'] = $this->getSummary();

        return $blockSchema;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'FourColumn');
    }
}
