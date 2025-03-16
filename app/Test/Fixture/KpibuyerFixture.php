<?php
/**
 * Kpibuyer Fixture
 */
class KpibuyerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'buyer_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ownership' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'acceptable_payment_terms' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'tolerance_level_plus' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'tolerance_level_minus' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'country_id' => array('type' => 'smallinteger', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true),
		'major_markets' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establishment_year' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'reference' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'contact_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bank_account_title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bank_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'account_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'branch_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'certifications_third_party_audit' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'social_audit_requirement' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'competitor_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'competitor_type' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 100, 'unsigned' => true),
		'industry_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'technical_audit_requirement' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'number_of_stores' => array('type' => 'smallinteger', 'null' => true, 'default' => null, 'unsigned' => true),
		'buyers_product_categories' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'buyer_and_ess_pvt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'price_level' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'quality_level' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'general_profile' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'current_business_potential' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fututure_business_potential' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'any_cradit_rating_available' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ecgc_cover_available' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'any_adverse' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'commission_from_client' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'commission_from_supplier' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'commission_percentage_buyer' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'commission_percentage_supplier' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'contract_signed' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'local_lang' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telephone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'courier_id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'courier_acc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'booking_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sales' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'account' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'shipping' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'envelop_contactlist_preview' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'entry_by' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'edit_by' => array('type' => 'smallinteger', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'buyer_code' => 'Lorem ipsum dolor ',
			'ownership' => 'Lorem ipsum dolor sit amet',
			'acceptable_payment_terms' => 1,
			'tolerance_level_plus' => 1,
			'tolerance_level_minus' => 1,
			'country_id' => 1,
			'major_markets' => 'Lorem ipsum dolor sit amet',
			'establishment_year' => 'Lo',
			'reference' => 'Lorem ipsum dolor sit amet',
			'contact_number' => 'Lorem ipsum dolor sit a',
			'bank_account_title' => 'Lorem ipsum dolor sit amet',
			'bank_name' => 'Lorem ipsum dolor sit amet',
			'account_no' => 'Lorem ipsum dolor sit amet',
			'branch_name' => 'Lorem ipsum dolor sit amet',
			'certifications_third_party_audit' => 'Lorem ipsum dolor sit amet',
			'social_audit_requirement' => 'Lorem ipsum dolor sit amet',
			'competitor_name' => 'Lorem ipsum dolor sit amet',
			'competitor_type' => 1,
			'industry_type' => 'Lorem ipsum dolor sit amet',
			'technical_audit_requirement' => 'Lorem ipsum dolor sit amet',
			'number_of_stores' => 1,
			'buyers_product_categories' => 'Lorem ipsum dolor sit amet',
			'buyer_and_ess_pvt' => 'Lorem ipsum dolor sit amet',
			'price_level' => 1,
			'quality_level' => 'Lorem ipsum dolor sit amet',
			'general_profile' => 'Lorem ipsum dolor sit amet',
			'current_business_potential' => 'Lorem ipsum dolor sit amet',
			'fututure_business_potential' => 'Lorem ipsum dolor sit amet',
			'any_cradit_rating_available' => 'Lorem ipsum dolor sit amet',
			'ecgc_cover_available' => 1,
			'any_adverse' => 'Lorem ipsum dolor sit amet',
			'commission_from_client' => 1,
			'commission_from_supplier' => 1,
			'commission_percentage_buyer' => 1,
			'commission_percentage_supplier' => 1,
			'contract_signed' => 1,
			'local_lang' => 'Lorem ipsum dolor sit amet',
			'telephone' => 'Lorem ipsum dolor sit a',
			'fax' => 'Lorem ipsum dolor sit a',
			'email' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'courier_id' => 1,
			'courier_acc' => 'Lorem ipsum dolor sit amet',
			'booking_no' => 'Lorem ipsum dolor sit amet',
			'sales' => 'Lorem ipsum dolor sit amet',
			'account' => 'Lorem ipsum dolor sit amet',
			'shipping' => 'Lorem ipsum dolor sit amet',
			'envelop_contactlist_preview' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'created' => '2023-11-13 17:37:57',
			'modified' => '2023-11-13 17:37:57',
			'entry_by' => 1,
			'edit_by' => 1
		),
	);

}
