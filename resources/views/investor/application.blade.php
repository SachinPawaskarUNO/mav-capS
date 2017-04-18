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
                        <p><small>Investor<br/>Profile</small></p>
                    </div>
                </div>
            </div>
            {!! Form::open(['url' => 'inv_application', 'class' => 'form-horizontal', 'id' => 'inv_application', 'files'=> true]) !!}
            {{ csrf_field() }}
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade active in">
                    <!-- Personal Details Section Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3><b>Personal Details</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('inv_first_name', 'First Name', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                <input type="text" id="inv_first_name" name="inv_first_name" class="form-control" value="{{ Auth::user()->first_name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_last_name', 'Last Name', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                <input type="text" id="inv_last_name" name="inv_last_name" class="form-control" value="{{ Auth::user()->last_name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_identification_card_number', 'Identification Card Number', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('inv_identification_card_number',null,['class'=>'form-control', 'id'=>'inv_identification_card_number']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_date_of_birth', 'Date of Birth', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('inv_date_of_birth',null,['class'=>'form-control', 'id'=>'inv_date_of_birth']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_gender', 'Gender', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('inv_gender', array(''=>'-- Please Select --','male' =>'Male','female' =>'Female'),'', ['class'=>'form-control', 'id'=>'inv_gender']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Information Section Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3><b>Contact Information</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('inv_street', 'Street', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('inv_street',null,['class'=>'form-control', 'id'=>'inv_street']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_city', 'City', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('inv_city',null,['class'=>'form-control', 'id'=>'inv_city']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_state', 'State', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('inv_state',null,['class'=>'form-control', 'id'=>'inv_state']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_zipcode', 'Zip Code', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('inv_zipcode',null,['class'=>'form-control', 'id'=>'inv_zipcode']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_country', 'Country', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('inv_country',$countries,'',['class'=>'form-control', 'id'=>'inv_country']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_phonenumber', 'Phone Number', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('inv_phonenumber',null,['class'=>'form-control', 'id'=>'inv_phonenumber']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information Section End -->
                    <!-- Investor Self Identification Section Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3><b>Investor Self Identification</b></h3></div>
                                    <div class="panel-body">
                                            <div class="form-group">
                                                {!! Form::label('inv_identity', 'Investor Identity', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                                <div class="col-md-6">
                                                    {!! Form::select('inv_identity', array(''=>'-- Please Select --','retail investor' =>'Retail Investor','sophisticated investor' =>'Sophisticated Investor','company'=>'Company','angel'=>'Angel'),'', ['class'=>'form-control', 'id'=>'inv_identity']) !!}
                                                    <h4>Please review the terms and conditions as an Investor on our platform</h4>
                                                    <div class="form-group">
                                                        <div class="col-md-1" style="text-align: center">
                                                            {{ Form::checkbox('inv_agree_terms',1,null,['id'=>'inv_agree_terms']) }}
                                                        </div>
                                                        <a href="{{ asset('files/investor_terms.pdf') }}" target="_blank">I agree with Capsphere Terms & Conditions</a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Investor Self Identification Section End -->
                    <ul class="list-unstyled list-inline pull-right">
                        <li>
                            <button type="button" class="btn btn-info next-step1" id="inv_next_step1">Next<i class="fa fa-chevron-right"></i></button>
                        </li>
                    </ul>
                    <div id="mandatory"> <span style="color:red">*</span>Indicates mandatory field</div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <!-- Investor Profile Section Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3><b>Investor Profile</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('inv_income', 'Income (Annually)', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('inv_income', array(''=>'-- Please Select --','below MYR30k' =>'below MYR30k','MYR30k – MYR60k' =>'MYR30k – MYR60k','MYR60k- MYR 120k'=>'MYR60k- MYR 120k','MYR120k – MYR240k'=>'MYR120k – MYR240k','Above MYR300k'=>'Above MYR300k'),'', ['class'=>'form-control', 'id'=>'inv_income']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_net_worth', 'Net Worth', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('inv_net_worth', array(''=>'-- Please Select --','MYR3mm' =>'MYR3mm','Above MYR3mm' =>'Above MYR3mm'),'', ['class'=>'form-control', 'id'=>'inv_net_worth']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_estimated_p2p', 'Estimated Invested Funds in P2P', ['class'=>'col-md-4 control-label','id'=>'mandatory-field', 'style'=>'padding-left:0px']) !!}
                                            <div class="col-md-6">
                                                {!! Form::text('inv_estimated_p2p',null,['class'=>'form-control', 'id'=>'inv_estimated_p2p']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Investor Profile Section Start -->
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3><b>Investor Experience</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('inv_risk_tolerance', 'Risk Tolerance', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('inv_risk_tolerance', array(''=>'--Please Select --','yes' =>'Yes','no' =>'No'),'', ['class'=>'form-control', 'id'=>'inv_risk_tolerance']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_stock_market', 'Stock Market', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('inv_stock_market', array(''=>'-- Please Select --','yes' =>'Yes','no' =>'No'),'', ['class'=>'form-control', 'id'=>'inv_stock_market']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_bonds_notes', 'Bonds and Notes', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('inv_bonds_notes', array(''=>'-- Please Select --','yes' =>'Yes','no' =>'No'),'', ['class'=>'form-control', 'id'=>'inv_bonds_notes']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_mutual_funds', 'Mutual Funds', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('inv_mutual_funds', array(''=>'-- Please Select --','yes' =>'Yes','no' =>'No'),'', ['class'=>'form-control', 'id'=>'inv_mutual_funds']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_sme_business', 'SME Business', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('inv_sme_business', array(''=>'-- Please Select --','yes' =>'Yes','no' =>'No'),'', ['class'=>'form-control', 'id'=>'inv_sme_business']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_p2p_lending', 'P2P Lending', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-6">
                                                {!! Form::select('inv_p2p_lending', array(''=>'-- Please Select --','yes' =>'Yes','no' =>'No'),'', ['class'=>'form-control', 'id'=>'inv_p2p_lending']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="padding-top: 25px">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3><b>Financial Documentation</b></h3></div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            {!! Form::label('inv_income_slip', 'Income_Slip', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-4">
                                                {!! Form::file('inv_income_slip',['id'=>'inv_income_slip']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_bank_statements', 'Bank Statements', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-4">
                                                {!! Form::file('inv_bank_statements',['id'=>'inv_bank_statements']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('inv_financial_statements', 'Audited Financial Statements', ['class'=>'col-md-4 control-label','id'=>'mandatory-field']) !!}
                                            <div class="col-md-4">
                                                {!! Form::file('inv_financial_statements',['id'=>'inv_financial_statements']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled list-inline pull-right">
                            <li>
                                <button type="button" class="btn btn-default prev-step1" id="inv_prev_step_2"><i class="fa fa-chevron-left"></i> Back</button>
                            </li>
                            <li>
                                <button type="submit" class="btn btn-success next-step1" id="inv_next_step2">Submit <i class="fa fa-chevron-right"></i></button>
                            </li>
                        </ul>
                    <div id="mandatory"> <span style="color:red">*</span>Indicates mandatory field</div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

@endsection