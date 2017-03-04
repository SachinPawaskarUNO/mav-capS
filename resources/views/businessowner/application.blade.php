@extends('layouts.app')
@section('content')
    <?php
    $countries = array(
        '' =>'Please select a country',
        'AF'=>'AFGHANISTAN',
        'AL'=>'ALBANIA',
        'DZ'=>'ALGERIA',
        'AS'=>'AMERICAN SAMOA',
        'AD'=>'ANDORRA',
        'AO'=>'ANGOLA',
        'AI'=>'ANGUILLA',
        'AQ'=>'ANTARCTICA',
        'AG'=>'ANTIGUA AND BARBUDA',
        'AR'=>'ARGENTINA',
        'AM'=>'ARMENIA',
        'AW'=>'ARUBA',
        'AU'=>'AUSTRALIA',
        'AT'=>'AUSTRIA',
        'AZ'=>'AZERBAIJAN',
        'BS'=>'BAHAMAS',
        'BH'=>'BAHRAIN',
        'BD'=>'BANGLADESH',
        'BB'=>'BARBADOS',
        'BY'=>'BELARUS',
        'BE'=>'BELGIUM',
        'BZ'=>'BELIZE',
        'BJ'=>'BENIN',
        'BM'=>'BERMUDA',
        'BT'=>'BHUTAN',
        'BO'=>'BOLIVIA',
        'BA'=>'BOSNIA AND HERZEGOVINA',
        'BW'=>'BOTSWANA',
        'BV'=>'BOUVET ISLAND',
        'BR'=>'BRAZIL',
        'IO'=>'BRITISH INDIAN OCEAN TERRITORY',
        'BN'=>'BRUNEI DARUSSALAM',
        'BG'=>'BULGARIA',
        'BF'=>'BURKINA FASO',
        'BI'=>'BURUNDI',
        'KH'=>'CAMBODIA',
        'CM'=>'CAMEROON',
        'CA'=>'CANADA',
        'CV'=>'CAPE VERDE',
        'KY'=>'CAYMAN ISLANDS',
        'CF'=>'CENTRAL AFRICAN REPUBLIC',
        'TD'=>'CHAD',
        'CL'=>'CHILE',
        'CN'=>'CHINA',
        'CX'=>'CHRISTMAS ISLAND',
        'CC'=>'COCOS (KEELING) ISLANDS',
        'CO'=>'COLOMBIA',
        'KM'=>'COMOROS',
        'CG'=>'CONGO',
        'CD'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
        'CK'=>'COOK ISLANDS',
        'CR'=>'COSTA RICA',
        'CI'=>'COTE D IVOIRE',
        'HR'=>'CROATIA',
        'CU'=>'CUBA',
        'CY'=>'CYPRUS',
        'CZ'=>'CZECH REPUBLIC',
        'DK'=>'DENMARK',
        'DJ'=>'DJIBOUTI',
        'DM'=>'DOMINICA',
        'DO'=>'DOMINICAN REPUBLIC',
        'TP'=>'EAST TIMOR',
        'EC'=>'ECUADOR',
        'EG'=>'EGYPT',
        'SV'=>'EL SALVADOR',
        'GQ'=>'EQUATORIAL GUINEA',
        'ER'=>'ERITREA',
        'EE'=>'ESTONIA',
        'ET'=>'ETHIOPIA',
        'FK'=>'FALKLAND ISLANDS (MALVINAS)',
        'FO'=>'FAROE ISLANDS',
        'FJ'=>'FIJI',
        'FI'=>'FINLAND',
        'FR'=>'FRANCE',
        'GF'=>'FRENCH GUIANA',
        'PF'=>'FRENCH POLYNESIA',
        'TF'=>'FRENCH SOUTHERN TERRITORIES',
        'GA'=>'GABON',
        'GM'=>'GAMBIA',
        'GE'=>'GEORGIA',
        'DE'=>'GERMANY',
        'GH'=>'GHANA',
        'GI'=>'GIBRALTAR',
        'GR'=>'GREECE',
        'GL'=>'GREENLAND',
        'GD'=>'GRENADA',
        'GP'=>'GUADELOUPE',
        'GU'=>'GUAM',
        'GT'=>'GUATEMALA',
        'GN'=>'GUINEA',
        'GW'=>'GUINEA-BISSAU',
        'GY'=>'GUYANA',
        'HT'=>'HAITI',
        'HM'=>'HEARD ISLAND AND MCDONALD ISLANDS',
        'VA'=>'HOLY SEE (VATICAN CITY STATE)',
        'HN'=>'HONDURAS',
        'HK'=>'HONG KONG',
        'HU'=>'HUNGARY',
        'IS'=>'ICELAND',
        'IN'=>'INDIA',
        'ID'=>'INDONESIA',
        'IR'=>'IRAN, ISLAMIC REPUBLIC OF',
        'IQ'=>'IRAQ',
        'IE'=>'IRELAND',
        'IL'=>'ISRAEL',
        'IT'=>'ITALY',
        'JM'=>'JAMAICA',
        'JP'=>'JAPAN',
        'JO'=>'JORDAN',
        'KZ'=>'KAZAKSTAN',
        'KE'=>'KENYA',
        'KI'=>'KIRIBATI',
        'KP'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF',
        'KR'=>'KOREA REPUBLIC OF',
        'KW'=>'KUWAIT',
        'KG'=>'KYRGYZSTAN',
        'LA'=>'LAO PEOPLES DEMOCRATIC REPUBLIC',
        'LV'=>'LATVIA',
        'LB'=>'LEBANON',
        'LS'=>'LESOTHO',
        'LR'=>'LIBERIA',
        'LY'=>'LIBYAN ARAB JAMAHIRIYA',
        'LI'=>'LIECHTENSTEIN',
        'LT'=>'LITHUANIA',
        'LU'=>'LUXEMBOURG',
        'MO'=>'MACAU',
        'MK'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
        'MG'=>'MADAGASCAR',
        'MW'=>'MALAWI',
        'MY'=>'MALAYSIA',
        'MV'=>'MALDIVES',
        'ML'=>'MALI',
        'MT'=>'MALTA',
        'MH'=>'MARSHALL ISLANDS',
        'MQ'=>'MARTINIQUE',
        'MR'=>'MAURITANIA',
        'MU'=>'MAURITIUS',
        'YT'=>'MAYOTTE',
        'MX'=>'MEXICO',
        'FM'=>'MICRONESIA, FEDERATED STATES OF',
        'MD'=>'MOLDOVA, REPUBLIC OF',
        'MC'=>'MONACO',
        'MN'=>'MONGOLIA',
        'MS'=>'MONTSERRAT',
        'MA'=>'MOROCCO',
        'MZ'=>'MOZAMBIQUE',
        'MM'=>'MYANMAR',
        'NA'=>'NAMIBIA',
        'NR'=>'NAURU',
        'NP'=>'NEPAL',
        'NL'=>'NETHERLANDS',
        'AN'=>'NETHERLANDS ANTILLES',
        'NC'=>'NEW CALEDONIA',
        'NZ'=>'NEW ZEALAND',
        'NI'=>'NICARAGUA',
        'NE'=>'NIGER',
        'NG'=>'NIGERIA',
        'NU'=>'NIUE',
        'NF'=>'NORFOLK ISLAND',
        'MP'=>'NORTHERN MARIANA ISLANDS',
        'NO'=>'NORWAY',
        'OM'=>'OMAN',
        'PK'=>'PAKISTAN',
        'PW'=>'PALAU',
        'PS'=>'PALESTINIAN TERRITORY, OCCUPIED',
        'PA'=>'PANAMA',
        'PG'=>'PAPUA NEW GUINEA',
        'PY'=>'PARAGUAY',
        'PE'=>'PERU',
        'PH'=>'PHILIPPINES',
        'PN'=>'PITCAIRN',
        'PL'=>'POLAND',
        'PT'=>'PORTUGAL',
        'PR'=>'PUERTO RICO',
        'QA'=>'QATAR',
        'RE'=>'REUNION',
        'RO'=>'ROMANIA',
        'RU'=>'RUSSIAN FEDERATION',
        'RW'=>'RWANDA',
        'SH'=>'SAINT HELENA',
        'KN'=>'SAINT KITTS AND NEVIS',
        'LC'=>'SAINT LUCIA',
        'PM'=>'SAINT PIERRE AND MIQUELON',
        'VC'=>'SAINT VINCENT AND THE GRENADINES',
        'WS'=>'SAMOA',
        'SM'=>'SAN MARINO',
        'ST'=>'SAO TOME AND PRINCIPE',
        'SA'=>'SAUDI ARABIA',
        'SN'=>'SENEGAL',
        'SC'=>'SEYCHELLES',
        'SL'=>'SIERRA LEONE',
        'SG'=>'SINGAPORE',
        'SK'=>'SLOVAKIA',
        'SI'=>'SLOVENIA',
        'SB'=>'SOLOMON ISLANDS',
        'SO'=>'SOMALIA',
        'ZA'=>'SOUTH AFRICA',
        'GS'=>'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
        'ES'=>'SPAIN',
        'LK'=>'SRI LANKA',
        'SD'=>'SUDAN',
        'SR'=>'SURINAME',
        'SJ'=>'SVALBARD AND JAN MAYEN',
        'SZ'=>'SWAZILAND',
        'SE'=>'SWEDEN',
        'CH'=>'SWITZERLAND',
        'SY'=>'SYRIAN ARAB REPUBLIC',
        'TW'=>'TAIWAN, PROVINCE OF CHINA',
        'TJ'=>'TAJIKISTAN',
        'TZ'=>'TANZANIA, UNITED REPUBLIC OF',
        'TH'=>'THAILAND',
        'TG'=>'TOGO',
        'TK'=>'TOKELAU',
        'TO'=>'TONGA',
        'TT'=>'TRINIDAD AND TOBAGO',
        'TN'=>'TUNISIA',
        'TR'=>'TURKEY',
        'TM'=>'TURKMENISTAN',
        'TC'=>'TURKS AND CAICOS ISLANDS',
        'TV'=>'TUVALU',
        'UG'=>'UGANDA',
        'UA'=>'UKRAINE',
        'AE'=>'UNITED ARAB EMIRATES',
        'GB'=>'UNITED KINGDOM',
        'US'=>'UNITED STATES',
        'UM'=>'UNITED STATES MINOR OUTLYING ISLANDS',
        'UY'=>'URUGUAY',
        'UZ'=>'UZBEKISTAN',
        'VU'=>'VANUATU',
        'VE'=>'VENEZUELA',
        'VN'=>'VIET NAM',
        'VG'=>'VIRGIN ISLANDS, BRITISH',
        'VI'=>'VIRGIN ISLANDS, U.S.',
        'WF'=>'WALLIS AND FUTUNA',
        'EH'=>'WESTERN SAHARA',
        'YE'=>'YEMEN',
        'YU'=>'YUGOSLAVIA',
        'ZM'=>'ZAMBIA',
        'ZW'=>'ZIMBABWE',
    ); ?>
    <div class="container">
        <div class="row">
            <div class="process">
                <div class="process-row nav nav-tabs">
                    <div class="process-step">
                        <button type="button" class="btn btn-info btn-circle" data-toggle="tab1" href="#menu1"><i class="fa fa-info fa-3x"></i></button>
                        <p><small>Personal<br/>Information</small></p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-default btn-circle" data-toggle="tab2" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>
                        <p><small>Business<br/>Details</small></p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-default btn-circle" data-toggle="tab3" href="#menu3"><i class="fa fa-check fa-3x"></i></button>
                        <p><small>Business<br/>Financials</small></p>
                    </div>
                </div>
            </div>
            {!! Form::open(['url' => 'bo_application', 'class' => 'form-horizontal', 'id' => 'bo_application', 'files' => true]) !!}
                {{ csrf_field() }}
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade active in">
                    <!-- Personal Details Section Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Personal Details</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_first_name', 'First Name', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                            {!! Form::text('bo_first_name', null,['class'=>'form-control', 'id'=>'bo_first_name']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_last_name', 'Last Name', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_last_name',null,['class'=>'form-control', 'id'=>'bo_last_name']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_identification_card_number', 'Identification Card Number', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_identification_card_number',null,['class'=>'form-control', 'id'=>'bo_identification_card_number']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_date_of_birth', 'Date of Birth', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_date_of_birth',null,['class'=>'form-control', 'id'=>'bo_date_of_birth']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_gender', 'Gender', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_gender', array(''=>'Please Select a gender','male' =>'Male','female' =>'Female'),'',
                                                ['class'=>'form-control', 'id'=>'bo_gender']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Personal Details Section End -->
                    <!-- Contact Information Section Start -->
                    <div class="container" style="padding-top: 25px" id="step2">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Contact Information</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_street', 'Street Address', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_personal_street',null,['class'=>'form-control', 'id'=>'bo_personal_street']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_city', 'City', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_personal_city',null,['class'=>'form-control', 'id'=>'bo_personal_city']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_state', 'State', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_personal_state',null,['class'=>'form-control', 'id'=>'bo_personal_state']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_zipcode', 'Zip Code', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_personal_zipcode',null,['class'=>'form-control', 'id'=>'bo_personal_zipcode']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_country', 'Country', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_personal_country',$countries,'',['class'=>'form-control', 'id'=>'bo_personal_country']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_personal_phonenumber', 'Phone Number', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_personal_phonenumber',null,['class'=>'form-control', 'id'=>'bo_personal_phonenumber']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Information Section End -->
                    <!-- Self Identification Section Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Owner Self Identification</b></h3></div>
                                    <div class="panel-body">
                                            <div class="form-group">
                                                {!! Form::label('bo_upload_IC', 'Upload IC', ['class'=>'col-md-4 control-label']) !!}
                                                <div class="col-md-4">
                                                    {!! Form::file('bo_upload_IC',['id'=>'bo_upload_IC']) !!}                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Self Identification Section End -->
                    <ul class="list-unstyled list-inline pull-right">
                        <li><button type="button" class="btn btn-info next-step" id="bo_next_step1">Next<i class="fa fa-chevron-right"></i></button></li>
                    </ul>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <!-- Business Operating Address Start -->
                    <div class="container" style="padding: 0">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Operating Address</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_business_street', 'Street Address', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_business_street',null,['class'=>'form-control', 'id'=>'bo_business_street']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_business_city', 'City', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_business_city',null,['class'=>'form-control', 'id'=>'bo_business_city']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_business_state', 'State', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_business_state',null,['class'=>'form-control', 'id'=>'bo_business_state']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_business_zipcode', 'Zip Code', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_business_zipcode',null,['class'=>'form-control', 'id'=>'bo_business_zipcode']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_business_country', 'Country', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_business_country',$countries,'',['class'=>'form-control', 'id'=>'bo_business_country']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_business_phonenumber', 'Phone Number', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_business_phonenumber',null,['class'=>'form-control', 'id'=>'bo_business_phonenumber']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Operating Address End -->
                    <!-- Business Background Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Background</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_industry', 'Industry', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_industry', array(''=>'Please Select a industry','manufacturing' =>'Manufacturing','automotive' =>'Automotive',
                                                'medical'=>'Medical','retail'=>'Retail','others'=>'Others'),'',
                                                ['class'=>'form-control', 'id'=>'bo_industry']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_type', 'Type', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_type',null,['class'=>'form-control', 'id'=>'bo_type']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_legal_entity', 'Legal Entity', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_legal_entity', array(''=>'Please Select a legal entity','sole_proprietor' =>'Sole Proprietor','partnership' =>'Partnership',
                                                'private_company'=>'Private Company','unlisted'=>'Unlisted Public Company'),'',
                                                ['class'=>'form-control', 'id'=>'bo_legal_entity']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_registration_number', 'Registration Number', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_registration_number',null,['class'=>'form-control', 'id'=>'bo_registration_number']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_registration_year', 'Registration Year', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_registration_year',null,['class'=>'form-control date-picker-year', 'id'=>'bo_registration_year']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_court_judgement', 'Court Judgement (describe)', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('bo_court_judgement', array(''=>'Please Select an option','yes' =>'Yes','no' =>'No'),'',
                                                ['class'=>'form-control', 'id'=>'bo_court_judgement']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Background End -->
                    <!-- Business Documents Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Documents</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_business_license', 'Business License', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::file('bo_business_license',['id'=>'bo_business_license']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_entity_type', 'Business Entity Type', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::file('bo_entity_type',['id'=>'bo_entity_type']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_CTOS', 'CTOS Documents', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::file('bo_CTOS',['id'=>'bo_CTOS']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Documents End -->
                    <ul class="list-unstyled list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step" id="bo_prev_step2"><i class="fa fa-chevron-left"></i> Back</button></li>
                        <li><button type="button" class="btn btn-info next-step" id="bo_next_step2">Next <i class="fa fa-chevron-right"></i></button></li>
                    </ul>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <!-- Business Financial Account Start -->
                    <div class="container" style="padding: 0">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Financial Account</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_bank_name', 'Bank Name', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_bank_name',null,['class'=>'form-control', 'id'=>'bo_bank_name']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_bank_account', 'Bank Account Number', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('bo_bank_account',null,['class'=>'form-control', 'id'=>'bo_bank_account']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Financial Account End -->
                    <!-- Business Financial Documents Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Business Financial Documents</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('bo_audited_statements', 'Audited Financial Statements', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::file('bo_audited_statements',['id'=>'bo_audited_statements']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_operating_statements', 'Operating Bank Statements', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::file('bo_operating_statements',['id'=>'bo_operating_statements']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bo_tax_returns', 'Tax Return Forms', ['class'=>'col-md-4 control-label']) !!}
                                            <div class="col-md-4">
                                                {!! Form::file('bo_tax_returns',['id'=>'bo_tax_returns']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Financial Documents End -->
                    <!-- Business Terms and Conditions Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3><b>Terms and Conditions</b></h3></div>
                                    <div class="panel-body">
                                        <h4>Please review the terms and conditions as a business on our platform</h4>
                                        <div class="form-group">
                                            <div class="col-md-1" style="text-align: center">
                                            {{ Form::checkbox('bo_agree_terms',true,null,['id'=>'bo_agree_terms']) }}
                                            </div>
                                            <a href="{{ asset('files/borrower_terms.pdf') }}" target="_blank">I agree with Capshere Terms & Conditions</a>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-1" style="text-align: center">
                                                {{ Form::checkbox('bo_agree_fees',true,null,['id'=>'bo_agree_fees']) }}
                                            </div>
                                            {!! Form::label('bo_agree_fees', 'I agree with Capshere Platform Fees') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Business Terms and Conditions End -->
                    <ul class="list-unstyled list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step" id="bo_prev_step3"><i class="fa fa-chevron-left"></i> Back</button></li>
                        <li><button type="submit" class="btn btn-success next-step" id="bo_next_step3"><i class="fa fa-check"></i>Submit</button></li>
                    </ul>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection