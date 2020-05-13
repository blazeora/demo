<?php
namespace Custom\Widgets\DynamicReportFilters_Mb;

class report_filter_select extends \RightNow\Libraries\Widget\Base {
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

        $response = $this->CI->model('custom/TestSearchReportModel')->getAppointmentSlots();
        $this->data['js']['appointmentslots'] = json_encode($response);
        // echo "<pre/>";
        // print_r($response);
        // echo( json_encode($response));
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
}