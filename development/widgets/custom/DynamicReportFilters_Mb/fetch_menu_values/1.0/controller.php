<?php
namespace Custom\Widgets\DynamicReportFilters_Mb;

class fetch_menu_values extends \RightNow\Libraries\Widget\Base {
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


        // echo $this->data['attrs']['objectName'];
        // echo "Hello World";
        // echo "<pre/>";
        // print_r($this->data['attrs']['default_ajax_endpoint']);
        print_r($this->data['attrs']['objectName']);

        // $response = $this->CI->model('custom/TestSearchReportModel')->genericMenuItemsFetch($objectName, $fieldName);
        $response = $this->CI->model('custom/TestSearchReportModel')->genericMenuItemsFetch("Contact", "preferredmethodofcontact");
        // echo json_encode($response);
        // echo "<pre/>";
        // print_r($response);
        $this->data['js']['menuFieldValues'] = json_encode($response);
        // return parent::getData();

    }

    /**
     * Handles the default_ajax_endpoint AJAX request
     * @param array $params Get / Post parameters
     */
    function handle_default_ajax_endpoint($params) {
        // Perform AJAX-handling here...
        // echo response
    }
}