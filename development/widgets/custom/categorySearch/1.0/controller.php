<?php
namespace Custom\Widgets;
use RightNow\Connect\Knowledge\v1 as RNCPHPKF;
use RightNow\Connect\v1_2 as RNCPHP;
require_once ( get_cfg_var( 'doc_root' ).'/include/ConnectPHP/Connect_init.phph' );
class categorySearch extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);

        $this->setAjaxHandlers(array(
            'default_ajax_endpoint' => array(
                'method'      => 'handle_default_ajax_endpoint',
                'clickstream' => 'custom_action',
            ),
        ));
    }

    function getData() {

        
        // $defaultChain = array();
        // $dataType = "category";
        // $maxLevel = 6;

        // $defaultHierMap = $this->CI->model('Prodcat')->getFormattedTree($dataType, $defaultChain, false, null, $maxLevel)->result;
        // $this->buildCategoryTree($defaultHierMap[0]);


        // $defaultHierMap = $this->CI->model('custom/GenerateCategoryTree')->getFormattedTree();
        $defaultHierMap = $this->CI->model('custom/GenerateCategoryTree')->category_recursive('parent', 0);
        // echo "<pre/>"; 
        // print_r($defaultHierMap);
        $this->data['js']['categoryHierarchy'] = $defaultHierMap;
        
        return parent::getData();
    }

    /**
     * Handles the default_ajax_endpoint AJAX request
     * @param array $params Get / Post parameters
     */
    function handle_default_ajax_endpoint($params) {
        // Perform AJAX-handling here...
        // echo response
    }

    function buildCategoryTree($defaultHierMap){
        // echo "<pre/>"; 
        // print_r($defaultHierMap);
        echo sizeof($defaultHierMap);
        for($i = 0; $i< sizeof($defaultHierMap); $i++){
            // echo "<pre/>"; 
            // print_r($defaultHierMap[$i]);

            if($defaultHierMap[$i]['hasChildren']>=1){

                $id = $defaultHierMap[$i]['id'];
                $filter = "Category";
                $linking = 1;
                $results = $this->CI->model('Prodcat')->getDirectDescendants($filter, $id);
            //    echo "<pre/>"; 
            //    print_r($results);
               // echo json_encode($results);
                // $this->_echoJSON($results->toJson());
                
            }
        }
        
    }
}