<?php


namespace MoxiworksPlatform;

use GuzzleHttp\Tests\Psr7\Str;
use MoxiworksPlatform\Exception\ArgumentException;
use MoxiworksPlatform\Exception\InvalidResponseException;
use Symfony\Component\Translation\Tests\StringClass;


class WebUser extends Resource {

    /**
     * @var string the Moxi Works Platform ID of the agent
     *   moxi_works_agent_id is the Moxi Works Platform ID of the agent which a contact is
     *   or is to be associated with.
     *
     *   this must be set for any Moxi Works Platform transaction
     *
     */
    public $moxi_works_agent_id;

    /**
     * @var string your system's unique ID for the contact
     *   *your system's* unique ID for the Contact
     *
     *   this must be set for any Moxi Works Platform transaction
     *
     */
    public $partner_contact_id;

    public $agent_uuid;


    /**
     * @var string -- Default ''
     *   the full name of this Contact
     *
     */
    public $contact_name;

    /**
     * @var string, Enumerated -- a single character 'm' or 'f' or -- Default ''
     *   the gender  of this Contact. the first initial of either gender type may
     *   be used or the full word 'male' or 'female.'
     *   <p>
     *   <b>note: The single character representation will be used after saving to Moxi Works Platform  no matter whether the word or single character representation is passed in.</b>
     *
     */
    public $gender;

    /**
     * @var string -- Default ''
     *   the street address of the residence of this Contact
     *
     */
    public $home_street_address;

    /**
     * @var string -- Default ''
     *   the city of the residence of this Contact
     *
     */
    public $home_city;

    /**
     * @var string -- Default ''
     *   the state in which the residence of this Contact is located
     *
     *   this can either be the state's abbreviation or the full name of the state
     *
     */
    public $home_state;

    /**
     * @var string -- Default ''
     *   the zip code of the residence of this Contact
     *
     */
    public $home_zip;

    /**
     * @var string -- Default ''
     *   the neighborhood of the residence of this Contact
     *
     *
     */
    public $home_neighborhood;

    /**
     * @var string -- Default ''
     *   the country of the residence of this Contact
     *
     *   this can either be the country's abbreviation or the full name of the country
     *
     *
     */
    public $home_country;

    /**
     * @var string -- Default ''
     *   the specific job title this contact has; ex: 'Senior VP of Operations'
     *
     *
     */
    public $job_title;

    /**
     * @var string -- Default ''
     *   human readable notes associated with the contact; ex: 'very interested in Springfield Heights'
     *
     *
     */
    public $note;

    /**
     * @var string -- Default ''
     *   the general occupation of this contact; ex: 'Software Developer'
     *
     *
     */
    public $occupation;


    /**
     * @var boolean
     *   Whether the contact was recently added to the Agent's database.
     *
     *
     */
    public $is_new_contact;

    /**
     * @var integer
     *   Birthday of the contact represented as a Unix Timestamp.
     *
     *
     */
    public $birthday;

    /**
     * @var integer
     *   Wedding anniversary of the contact represented as a Unix Timestamp.
     *
     *
     */
    public $anniversary;

    /**
     * @var home_purchase_anniversary
     *   Anniversary of the contact's home purchase represented as a Unix Timestamp.
     *
     *
     */
    public $home_purchase_anniversary;


    /**
     * @var array
     *   URLs to any social media profiles that the agent has defined.
     *
     * The structure of each social media profile entry will be an associative array with
     * the following format:
     *  { "key" => "KEY_VAL_AS_STRING", "url" => "URL_OF_SOCIAL_MEDIA_PROFILE" }
     *
     *
     */
    public $social_media_profiles;


    /**
     * @var string -- Default ''
     *   your system's unique identifier for the agent that this contact will be associated with
     *
     *
     */
    public $partner_agent_id;

    /**
     * @var string -- Default ''
     *   the email address the contact would want to be contacted via first
     *
     *
     */
    public $primary_email_address;

    /**
     * @var string -- Default ''
     *   the phone number the contact would want to be contacted via first
     *
     *
     */
    public $primary_phone_number;

    /**
     * @var string -- Default ''
     *   an additional email address the contact would want to be contacted by
     *
     *
     */
    public $secondary_email_address;

    /**
     * @var string -- Default ''
     *   an additional phone number the contact would want to be contacted by
     *
     *
     */
    public $secondary_phone_number;

    /**
     * @var int -- Default  nil
     *
     *   the number of bathrooms in the listing the contact has expressed interest in
     *
     *   Property of Interest (POI) attribute
     *
     */
    public $property_baths;

    /**
     * @var int -- Default nil
     *
     *   the number of bedrooms in the listing the contact has expressed interest in
     *
     *   Property of Interest (POI) attribute
     *
     *
     */
    public $property_beds;

    /**
     * @var string -- Default ''
     *
     *   the city in which the listing the contact has expressed interest in is located
     *
     *   Property of Interest (POI) attribute
     *
     *
     */
    public $property_city;

    /**
     * @var int -- Default nil
     *
     *   the list_price of the property the contact has expressed interest in
     *
     *   Property of Interest (POI) attribute
     *
     *
     */
    public $property_list_price;

    /**
     * @var property_listing_status
     *
     *   Property of Interest (POI) attribute
     *
     *   the status of the listing of  the Property of Interest; ex: 'Active' or 'Sold'
     *
     *
     */
    public $property_listing_status;

    /**
     * @var property_mls_id
     *
     *   the MLS ID of the listing that of the Property of Interest
     *
     *   Property of Interest (POI) attribute
     *
     *
     */
    public $property_mls_id;

    /**
     * @var property_photo_url
     *
     *   a full URL to a photo of the Property of Interest
     *
     *   Property of Interest (POI) attribute
     *
     *
     */
    public $property_photo_url;

    /**
     * @var property_state
     *
     *   the state in which the listing the contact has expressed interest in is located
     *
     *   Property of Interest (POI) attribute
     *
     *
     */
    public $property_state;

    /**
     * @var property_street_address
     *
     *   the street address of the listing the contact has expressed interest in is located
     *
     *   Property of Interest (POI) attribute
     *
     *
     */
    public $property_street_address;

    /**
     * @var property_url
     *
     *   a URL referencing a HTTP(S) location which has information about the listing
     *
     *   Property of Interest (POI) attribute
     *
     *
     */
    public $property_url;

    /**
     * @var property_zip
     *
     *   the zip code in which the listing the contact has expressed interest in is located
     *
     *   Property of Interest (POI) attribute
     *
     *
     */
    public $property_zip;

    /**
     * @var search_city
     *
     *   the city which the contact has searched for listings in
     *
     *   Property Search (PS) attribute
     *
     *
    attr_accessor :search_city
     */
    public $search_city;

    /**
     * @var search_state
     *
     *   the state which the contact has searched for listings in
     *
     *   Property Search (PS) attribute
     *
     *
     */
    public $search_state;

    /**
     * @var search_zip
     *
     *   the zip code which the contact has searched for listings in
     *
     *   Property Search (PS) attribute
     *
     *
     */
    public $search_zip;

    /**
     * @var search_max_lot_size
     *
     *   the maximum lot size used by the contact when searching for listings
     *
     *   Property Search (PS) attribute
     *
     *
     */
    public $search_max_lot_size;

    /**
     * @var int -- Default nil
     *
     *   the maximum price value used by the contact when searching for listings
     *
     *   Property Search (PS) attribute
     *
     *
     */
    public $search_max_price;

    /**
     * @var int -- Default nil
     *
     *   the maximum listing square footage used by the contact when searching for listings
     *
     *   Property Search (PS) attribute
     *
     *
     */
    public $search_max_sq_ft;

    /**
     * @var int -- Default nil
     *
     *   the maximum year built used by the contact when searching for listings
     *
     *   Property Search (PS) attribute
     *
     *
     */
    public $search_max_year_built;

    /**
     * @var float -- Default nil
     *
     *   Property Search (PS) attribute
     *
     *   the minimum number of bathrooms used by the contact when searching for listings
     *
     *
     *
     */
    public $search_min_baths;

    /**
     * @var int -- Default nil
     *
     *   the minimum number of bedrooms used by the contact when searching for listings
     *
     *   Property Search (PS) attribute
     *
     *
     */
    public $search_min_beds;

    /**
     * @var int -- Default nil
     *
     *   the minimum price used by the contact when searching for listings
     *
     *   Property Search (PS) attribute
     *
     *
     */
    public $search_min_price;

    /**
     * @var int -- Default nil
     *
     *   the minimum square footage used by the contact when searching for listings
     *
     *   Property Search (PS) attribute
     *
     *
     */
    public $search_min_sq_ft;

    /**
     *
     * @var int -- Default nil
     *
     *   the minimum year built used by the contact when searching for listings
     *
     *   Property Search (PS) attribute
     *
     */
    public $search_min_year_built;

    /**
     * @var string -- Default ''
     *
     *   the property types used by the contact when searching for listings; ex: 'Condo' 'Single-Family' 'Townhouse'
     *
     *   Property Search (PS) attribute
     *
     */
    public $search_property_types;

    /**
     * Contact constructor.
     * @param array $data
     */
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }

    /**
     * Search for Contact by name/email/phone on Moxi Works Platform.
     *
     * search can be performed by including contact_name and/or email_address and/or phone_number in a parameter array
     *  <code>
     *  \MoxiworksPlatform\Contact::search([moxi_works_agent_id: 'abc123', contact_name: 'Buckminster Fuller'])
     *  </code>
     * @param array $attributes
     *       <br><b>moxi_works_agent_id *either agent_uuid or moxi_works_agent_id are REQUIRED* </b>The Moxi Works Agent ID for the agent to which this contact is associated
     *       <br><b>agent_uuid *either agent_uuid or moxi_works_agent_id are REQUIRED* </b>The Moxi Works Agent UUID for the agent to which this contact is associated
     *       <br><b>contact_name</b>full name of the contact
     *       <br><b>email_address</b>email address of the contact
     *       <br><b>phone_number</b>phone number of the contact
     *       <br> <b>updated_since</b> return all Contacts updated after this Unix timestamp
     *
     *
     * @return Array of Contact objects
     *
     * @throws ArgumentException if required parameters are not included
     * @throws ArgumentException if at least one search parameter is not defined
     * @throws RemoteRequestFailureException
     */
    public static function search($attributes=[]) {
        $method = 'GET';
        $url = Config::getUrl() . "/api/web_users";
        $results = array();

        $required_opts = array('agent_uuid');
        $search_attrs = [];//array('contact_name', 'phone_number', 'email_address');

        if(count(array_intersect(array_keys($attributes), $required_opts)) != count($required_opts))
            throw new ArgumentException(implode(',', $required_opts) . " are required");

        //if(count(array_intersect(array_keys($attributes), $search_attrs)) == 0)
        //    throw new ArgumentException("at least one of " . implode(',', $search_attrs) . " are required");

        $json = Resource::apiConnection($method, $url, $attributes);

        if(!isset($json) || empty($json))
            return $results;

        return $json;

        /*foreach($json as $element) {
            $contact = new Contact($element);
            array_push($results, $contact);
        }
        return $results;*/
    }

    /**
     * @param $method
     * @param array $opts
     * @param null $url
     *
     * @return WebUser
     *
     * @throws ArgumentException if required parameters are not included
     * @throws RemoteRequestFailureException
     */
    private static function sendRequest($method, $opts=[], $url=null) {
        if($url == null) {
            $url = Config::getUrl() . "/api/web_users";
        }
        $required_opts = array('partner_contact_id', 'moxi_works_agent_id', 'agent_uuid');
        if(count(array_intersect(array_keys($opts), $required_opts)) + 1 < count($required_opts))
            throw new ArgumentException(implode(',', $required_opts) . " are required");
        $contact = null;
        $json = Resource::apiConnection($method, $url, $opts);
        $contact = (!isset($json) || empty($json)) ? null : new WebUser($json);
        return $contact;
    }

}