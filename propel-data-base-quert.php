$countryCode = 'ru';
$countries = \CountryQuery::create()
->addAsColumn('order_field', "CASE WHEN code = '$countryCode' THEN 1 ELSE 0 END")
->select(array('Id', 'Name', 'Code'))
->orderBy('order_field', \Criteria::DESC)
->orderById(\Criteria::ASC)
->find();