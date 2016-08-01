<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class CountrySeeder
 *
 * REF:
 *
 * @see https://www.countries-ofthe-world.com/world-currencies.html
 */
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        DB::table('countries')->insert([
            // Countries that begin with A
            [
                'country'  => 'Afghanistan',
                'tax_rate' => '20',
                'currency' => 'AFN',
            ],
            [
                'country'  => 'Albania',
                'tax_rate' => '20',
                'currency' => 'ALL'
            ],
            [
                'country'  => 'Algeria',
                'tax_rate' => '17',
                'currency' => 'DZD',
            ],
            [
                'country'  => 'American Samoa',
                'tax_rate' => '0',
                'currency' => 'USD'
            ],
            [
                'country'  => 'Andorra',
                'tax_rate' => '4,5',
                'currency' => 'EUR',
            ],
            [
                'country'  => 'Angola',
                'tax_rate' => '30',
                'currency' => 'AOA'
            ],
            [
                'country'  => 'Anguilla',
                'tax_rate' => '10',
                'currency' => 'XCD'
            ],
            [
                'country'  => 'Antartica',
                'tax_rate' => '0',
                'currency' => 'none'
            ],
            [
                'country'  => 'Antigua and Barbuda',
                'tax_rate' => '15',
                'currency' => 'XCD'
            ],
            [
                'country'  => 'Argentina',
                'tax_rate' => '21',
                'currency' => 'ARS'
            ],
            [
                'country'  => 'Armenia',
                'tax_rate' => '20',
                'currency' => 'AMD'
            ],
            [
                'country'  => 'Aruba',
                'tax_rate' => '25',
                'currency' => 'AWG'
            ],
            [
                'country'  => 'Australia',
                'tax_rate' => '10',
                'currency' => 'AUD'
            ],
            [
                'country'  => 'Austria',
                'tax_rate' => '20',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Azerbaijan',
                'tax_rate' => '18',
                'currency' => 'AZN'
            ],

            // Countries that begin with B
            [
                'country'  => 'Bahamas',
                'tax_rate' => '7,5',
                'currency' => 'BSD'
            ],
            [
                'country'  => 'Bahrain',
                'tax_rate' => '',
                'currency' => 'BHD'
            ],
            [
                'country'  => 'Bangladesh',
                'tax_rate' => '15',
                'currency' => 'BDT'
            ],
            [
                'country'  => 'Barbados',
                'tax_rate' => '17,5',
                'currency' => 'BBD'
            ],
            [
                'country'  => 'Belarus',
                'tax_rate' => '20',
                'currency' => 'BYR'
            ],
            [
                'country'  => 'Belgium',
                'tax_rate' => '21',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Belize',
                'tax_rate' => '12,5',
                'currency' => 'BZD',
            ],
            [
                'country'  => 'Benin',
                'tax_rate' => '18',
                'currency' => 'XOF'
            ],
            [
                'country'  => 'Bermuda',
                'tax_rate' => '',
                'currency' => 'BMD'
            ],
            [
                'country'  => 'Bhutan',
                'tax_rate' => '',
                'currency' => 'BTN'
            ],
            [
                'country'  => 'Bolivia',
                'tax_rate' => '13',
                'currency' => 'BOB'
            ],
            [
                'country'  => 'Bonaire, Sint Eustatius ans Saba',
                'tax_rate' => '',
                'currency' => 'USD'
            ],
            [
                'country'  => 'Bosnia and Herzegovina',
                'tax_rate' => '17',
                'currency' => 'BAM'
            ],
            [
                'country'  => 'Botswana',
                'tax_rate' => '12',
                'currency' => 'BWP'
            ],
            [
                'country'  => 'Bouvet Island',
                'tax_rate' => '',
                'currency' => 'Unknown'
            ],
            [
                'country'  => 'Brazil',
                'tax_rate' => '42',
                'currency' => 'BRL'
            ],
            [
                'country'  => 'British Indian Ocean Territory',
                'tax_rate' => '',
                'currency' => 'USD'
            ],
            [
                'country'  => 'Brunei',
                'tax_rate' => '',
                'currency' => 'BND'
            ],
            [
                'country'  => 'Bulgaria',
                'tax_rate' => '20',
                'currency' => 'BGN'
            ],
            [
                'country'  => 'Burkina Faso',
                'tax_rate' => '18',
                'currency' => 'XOF'
            ],
            [
                'country'  => 'Burundi',
                'tax_rate' => '18',
                'currency' => 'BIF'
            ],

            // Countries that begin with a C.
            [
                'country'  => 'Cambodia',
                'tax_rate' => '10',
                'currency' => 'KHR'
            ],
            [
                'country'  => 'Cameroon',
                'tax_rate' => '19,25',
                'currency' => 'XAF',
            ],
            [
                'country'  => 'Canada',
                'tax_rate' => '5',
                'currency' => 'CAD'
            ],
            [
                'country'  => 'Cape Verde',
                'tax_rate' => '15',
                'currency' => 'CVE'
            ],
            [
                'country'  => 'Cayman Islands',
                'tax_rate' => '',
                'currency' => 'KYD'
            ],
            [
                'country'  => 'Central African Republic',
                'tax_rate' => '19',
                'currency' => 'XAF'
            ],
            [
                'country'  => 'Chad',
                'tax_rate' => '18',
                'currency' => 'XAF'
            ],
            [
                'country'  => 'Chile',
                'tax_rate' => '19',
                'currency' => 'CLP'
            ],
            [
                'country'  => 'China',
                'tax_rate' => '17',
                'currency' => 'CNY'
            ],
            [
                'country'  => 'Christmas Island',
                'tax_rate' => '',
                'currency' => 'AUD'
            ],
            [
                'country'  => 'Cocos (Keeling) Islands',
                'tax_rate' => '',
                'currency' => 'AUD'
            ],
            [
                'country'  => 'Colombia',
                'tax_rate' => '16',
                'currency' => 'COP'
            ],
            [
                'country'  => 'Comoros',
                'tax_rate' => '',
                'currency' => 'KMF'
            ],
            [
                'country'  => 'Cook islands',
                'tax_rate' => '',
                'currency' => 'unkown'
            ],
            [
                'country'  => 'Costa Rica',
                'tax_rate' => '13',
                'currency' => 'CRC'
            ],
            [
                'country'  => 'Cote de azur',
                'tax_rate' => '',
                'currency' => 'XOF'
            ],
            [
                'country'  => 'Croatia',
                'tax_rate' => '25',
                'currency' => 'HRK'
            ],
            [
                'country'  => 'Cuba',
                'tax_rate' => '',
                'currency' => 'CUP'
            ],
            [
                'country'  => 'Curacao',
                'tax_rate' => '',
                'currency' => 'ANG'
            ],
            [
                'country'  => 'Cyprus',
                'tax_rate' => '19',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Czech Republic',
                'tax_rate' => '21',
                'currency' => 'CZK'
            ],

            // Countries that begin with a D.
            [
                'country'  => 'Democratic Republic of the congo.',
                'tax_rate' => '16',
                'currency' => 'CDF'
            ],
            [
                'country'  => 'Denmark',
                'tax_rate' => '25',
                'currency' => 'DKK'
            ],
            [
                'country'  => 'Djibouti',
                'tax_rate' => '',
                'currency' => 'DJF'
            ],
            [
                'country'  => 'Dominica',
                'tax_rate' => '15',
                'currency' => 'XCD'
            ],
            [
                'country'  => 'Dominican Republic',
                'tax_rate' => '18',
                'currency' => 'DOP'
            ],

            // Countries that begin with a E.
            [
                'country'   => 'Ecuador',
                'tax_reate' => '12',
                'currency'  =>'USD'
            ],
            [
                'country'   => 'Egypt',
                'tax_reate' => '10',
                'currency'  => 'EGP'
            ],
            [
                'country'   => 'El Salvador',
                'tax_reate' => '13',
                'currency'  => 'USD'
            ],
            [
                'country'   => 'Equatorial Guinea',
                'tax_reate' => '15',
                'currency'  => 'XAF'
            ],
            [
                'country'   => 'Eritrea',
                'tax_reate' => '',
                'currency'  => 'ERN'
            ],
            [
                'country'   => 'Estonia',
                'tax_reate' => '20',
                'currency'  => 'EUR'
            ],
            [
                'country'   => 'Ethiopia',
                'tax_reate' => '15',
                'currency'  => 'ETB'
            ],

            // Countries that begin with an F
            [
                'country'  => 'Falkland islands',
                'tax_rate' => '',
                'currency' => 'FKP'
            ],
            [
                'country'  => 'Faroe Islands',
                'tax_rate' => '25',
                'currency' => 'NONE'
            ],
            [
                'country'  => 'Fiji',
                'tax_rate' => '15',
                'currency' => 'FJD'
            ],
            [
                'country'  => 'Finland',
                'tax_rate' => '24',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'France',
                'tax_rate' => '20',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'French Guiana',
                'tax_rate' => '20',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'French Polynesia',
                'tax_rate' => '20',
                'currency' => 'XPF'
            ],
            [
                'country'  => 'French Southern Territory',
                'tax_rate' => '20',
                'currency' => 'UNKOWN'
            ],

            // Countries started with an G.
            [
                'country'  => 'Gabon',
                'tax_rate' => '18',
                'currency' => 'XAF'
            ],
            [
                'country'  => 'Gambia',
                'tax_rate' => '15',
                'currency' => 'GMD'
            ],
            [
                'country'  => 'Georgia',
                'tax_rate' => '18',
                'currency' => 'GEL'
            ],
            [
                'country'  => 'Germany',
                'tax_rate' => '19',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Ghana',
                'tax_rate' => '15',
                'currency' => 'GHS'
            ],
            [
                'country'  => 'Gibraltar',
                'tax_rate' => '',
                'currency' => 'GIP'
            ],
            [
                'country'  => 'Greece',
                'tax_rate' => '24',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Greenland',
                'tax_rate' => '',
                'currency' => 'DKK'
            ],
            [
                'country'  => 'Grenada',
                'tax_rate' => '15',
                'currency' => 'XCD'
            ],
            [
                'country'  => 'Guadaloupe',
                'tax_rate' => '',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Guam',
                'tax_rate' => '',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Guatamala',
                'tax_rate' => '12',
                'currency' => 'GTQ'
            ],
            [
                'country'  => 'Guernsey',
                'tax_rate' => '',
                'currency' => 'GGP'
            ],
            [
                'country'  => 'Guinea',
                'tax_rate' => '18',
                'currency' => 'GNF'
            ],
            [
                'country'  => 'Guinea-Bissau',
                'tax_rate' => '15',
                'currency' => 'XOF'
            ],
            [
                'country'  => 'Guyana',
                'tax_rate' => '16',
                'currency' => 'GYD'
            ],

            // Countries that started with an H.
            [
                'country'  => 'Haiti',
                'tax_rate' => '10',
                'currency' => 'HTG'
            ],
            [
                'country'  => 'Heard Island and McDonals Island',
                'tax_rate' => '',
                'currency' => 'UNKNOWN'
            ],
            [
                'country'  => 'Honduras',
                'tax_rate' => '12',
                'currency' => 'HNL'
            ],
            [
                'country'  => 'Hong Kong',
                'tax_rate' => '',
                'currency' => 'HKD'
            ],
            [
                'country'  => 'Hungary',
                'tax_rate' => '27',
                'currency' => 'HUF'
            ],

            // Countries that started with an I.
            [
                'country'  => 'Iceland',
                'tax_rate' => '24',
                'currency' => 'ISK'
            ],
            [
                'country'  => 'India',
                'tax_rate' => '5,5',
                'currency' => 'INR'
            ],
            [
                'country'  => 'Indonesia',
                'tax_rate' => '10',
                'currency' => 'IDR'
            ],
            [
                'country'  => 'Iran',
                'tax_rate' => '9',
                'currency' => 'IRR'
            ],
            [
                'country'  => 'Iraq',
                'tax_rate' => '',
                'currency' => 'IQD'
            ],
            [
                'country'  => 'Ireland',
                'tax_rate' => '23',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Isle of Man',
                'tax_rate' => '20',
                'currency' => 'IMP'
            ],
            [
                'country'  => 'Israel',
                'tax_rate' => '17',
                'currency' => 'ILS'
            ],
            [
                'country'  => 'Italy',
                'tax_rate' => '22',
                'currency' => 'EUR'
            ],

            // Countries that started with an J
            [
                'country'  => 'Jamaica',
                'tax_rate' => '12,5',
                'currency' => 'JMD'
            ],
            [
                'country'  => 'Japan',
                'tax_rate' => '8',
                'currency' => 'JPY'
            ],
            [
                'country'  => 'Jersey',
                'tax_rate' => '5',
                'currency' => 'JEP'
            ],
            [
                'country'  => 'Jordan',
                'tax_rate' => '16',
                'currency' => 'JOD'
            ],

            // Countries that started with an K.
            [
                'country'  => 'Kazakhstan',
                'tax_rate' => '12',
                'currency' => 'KZT'
            ],
            [
                'country'  => 'Kenya',
                'tax_rate' => '16',
                'currency' => 'KES'
            ],
            [
                'country'  => 'Kiribati',
                'tax_rate' => '',
                'currency' => 'AUD'
            ],
            [
                'country'  => 'Kosovo',
                'tax_rate' => '18',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Kuwait',
                'tax_rate' => '',
                'currency' => 'KWD'
            ],
            [
                'country'  => 'Kyrgyzstan',
                'tax_rate' => '20',
                'currency' => 'KGS'
            ],

            // Countries that started with an L
            [
                'country'  => 'Laos',
                'tax_rate' => '10',
                'currency' => 'LAK'
            ],
            [
                'country'  => 'Latvia',
                'tax_rate' => '21',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Lebanon',
                'tax_rate' => '10',
                'currency' => 'LBP'
            ],
            [
                'country'  => 'Lesotho',
                'tax_rate' => '14',
                'currency' => 'LSL'
            ],
            [
                'country'  => 'Liberia',
                'tax_rate' => '',
                'currency' => 'LRD'
            ],
            [
                'country'  => 'Libya',
                'tax_rate' => '',
                'currency' => 'LYD'
            ],
            [
                'country'  => 'Liechtenstein',
                'tax_rate' => '8',
                'currency' => 'CHF'
            ],
            [
                'country'  => 'Lithuania',
                'tax_rate' => '21',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Luxembourg',
                'tax_rate' => '17',
                'currency' => 'EUR'
            ],

            // Countries that started with an M.
            [
                'country'  => 'Macao',
                'tax_rate' => '',
                'currency' => 'MOP'
            ],
            [
                'country'  => 'Macedonia',
                'tax_rate' => '18',
                'currency' => 'MKD'
            ],
            [
                'country'  => 'Madagascar',
                'tax_rate' => '20',
                'currency' => 'MGA'
            ],
            [
                'country'  => 'Malawi',
                'tax_rate' => '16,5',
                'currency' => 'MWK'
            ],
            [
                'country'  => 'Malaysia',
                'tax_rate' => '6',
                'currency' => 'MYR'
            ],
            [
                'country'  => 'Maldives',
                'tax_rate' => '6',
                'currency' => 'MVR'
            ],
            [
                'country'  => 'Mali',
                'tax_rate' => '18',
                'currency' => 'XOF'
            ],
            [
                'country'  => 'Malta',
                'tax_rate' => '18',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Marshall Islands',
                'tax_rate' => '',
                'currency' => 'USD'
            ],
            [
                'country'  => 'Martinique',
                'tax_rate' => '',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Mauritinia',
                'tax_rate' => '14',
                'currency' => 'MRO'
            ],
            [
                'country'  => 'Mauritius',
                'tax_rate' => '15',
                'currency' => 'MUR'
            ],
            [
                'country'  => 'Mayotte',
                'tax_rate' => '',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Mexico',
                'tax_rate' => '16',
                'currency' => 'MXN'
            ],
            [
                'country'  => 'Micronesia',
                'tax_rate' => '',
                'currency' => 'USD'
            ],
            [
                'country'  => 'Moldava',
                'tax_rate' => '20',
                'currency' => 'MDL'
            ],
            [
                'country'  => 'Monaco',
                'tax_rate' => '19,6',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Mongolia',
                'tax_rate' => '10',
                'currency' => 'MNT'
            ],
            [
                'country'  => 'Montenegro',
                'tax_rate' => '19',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Montserrat',
                'tax_rate' => '',
                'currency' => 'XCD'
            ],
            [
                'country'  => 'Morocco',
                'tax_rate' => '20',
                'currency' => 'MAD'
            ],
            [
                'country'  => 'Mozambique',
                'tax_rate' => '17',
                'currency' => 'MZN'
            ],
            [
                'country'  => 'Myanmar (Burma)',
                'tax_rate' => '',
                'currency' => 'MMK'
            ],

            // Countries that started with an N
            [
                'country'  => 'Namibia',
                'tax_rate' => '15',
                'currency' => 'NAD'
            ],
            [
                'country'  => 'Nauru',
                'tax_rate' => '',
                'currency' => 'AUD'
            ],
            [
                'country'  => 'Nepal',
                'tax_rate' => '13',
                'currency' => 'NPR'
            ],
            [
                'country'  => 'Netherlands',
                'tax_rate' => '21',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'New Caledonia',
                'tax_rate' => '',
                'currency' => 'XPF'
            ],
            [
                'country'  => 'New Zealand',
                'tax_rate' => '15',
                'currency' => 'NZD'
            ],
            [
                'country'  => 'Nicaragua',
                'tax_rate' => '15',
                'currency' => 'NIO'
            ],
            [
                'country'  => 'Niger',
                'tax_rate' => '19',
                'currency' => 'XOF'
            ],
            [
                'country'  => 'Nigeria',
                'tax_rate' => '5',
                'currency' => 'NGN'
            ],
            [
                'country'  => 'Niue',
                'tax_rate' => '5',
                'currency' => 'NZD'
            ],
            [
                'country'  => 'Norfolk Island',
                'tax_rate' => '',
                'currency' => 'AUD'
            ],
            [
                'country'  => 'North Korea',
                'tax_rate' => '',
                'currency' => 'KPW'
            ],
            [
                'country'  => 'Northern Mariana Islands',
                'tax_rate' => '',
                'currency' => 'USD'
            ],
            [
                'country'  => 'Norway',
                'tax_rate' => '25',
                'currency' => 'NOK'
            ],

            // Countries started with an O.
            [
                'country'  => 'Oman',
                'tax_rate' => '',
                'currency' => 'OMR'
            ],

            // Countries started with an P.
            [
                'country'  => 'Pakistan',
                'tax_rate' => '17',
                'currency' => 'PKR'
            ],
            [
                'country'  => 'Palau',
                'tax_rate' => '',
                'currency' => 'USD'
            ],
            [
                'country'  => 'Palestine',
                'tax_rate' => '16',
                'currency' => 'ILS'
            ],
            [
                'country'  => 'Panama',
                'tax_rate' => '7',
                'currency' => 'USD'
            ],
            [
                'country'  => 'Papua New Guinea',
                'tax_rate' => '10',
                'currency' => 'PGK'
            ],
            [
                'country'  => 'Paraguay',
                'tax_rate' => '10',
                'currency' => 'PYG'
            ],
            [
                'country'  => 'Peru',
                'tax_rate' => '18',
                'currency' => 'PEN'
            ],
            [
                'country'  => 'Phillipines',
                'tax_rate' => '12',
                'currency' => 'PHP'
            ],
            [
                'country'  => 'Pitcaim',
                'tax_rate' => '',
                'currency' => 'NZD'
            ],
            [
                'country'  => 'Poland',
                'tax_rate' => '23',
                'currency' => 'PLN'
            ],
            [
                'country'  => 'Portugal',
                'tax_rate' => '23',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Puerto Rico',
                'tax_rate' => '',
                'currency' => 'USD'
            ],

            // Countries started with an Q.
            [
                'country'  => 'Qatar',
                'tax_rate' => '',
                'currency' => 'QAR'
            ],

            // Countries started with an R.
            [
                'country'  => 'Reunion',
                'tax_rate' => '',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Romania',
                'tax_rate' => '20',
                'currency' => 'RON'
            ],
            [
                'country'  => 'Russia',
                'tax_rate' => '18',
                'currency' => 'RUB'
            ],
            [
                'country'  => 'Rwanda',
                'tax_rate' => '18',
                'currency' => 'RWF'
            ],

            // Countries started with an S.
            [
                'country'  => 'Saint Barthelemy', 
                'tax_rate' => '',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Saint Helena', 
                'tax_rate' => '',
                'currency' => 'SHP'
            ],
            [
                'country'  => 'Saint Kitts and Nevis', 
                'tax_rate' => '17',
                'currency' => 'XCD'
            ],
            [
                'country'  => 'Saint Lucia', 
                'tax_rate' => '',
                'currency' => 'XCD'
            ],
            [
                'country'  => 'Saint Martin', 
                'tax_rate' => '',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Saint Pierre and Miquelon', 
                'tax_rate' => '',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Saint Vincent and the Grenadines', 
                'tax_rate' => '',
                'currency' => 'XCD'
            ],
            [
                'country'  => 'Samoa', 
                'tax_rate' => '15',
                'currency' => 'WST'
            ],
            [
                'country'  => 'San Marino', 
                'tax_rate' => '',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'San Tome and Principe', 
                'tax_rate' => '',
                'currency' => 'STD'
            ],
            [
                'country'  => 'Saudi Arabia', 
                'tax_rate' => '',
                'currency' => 'SAR'
            ],
            [
                'country'  => 'Senegal', 
                'tax_rate' => '18',
                'currency' => 'XOF'
            ],
            [
                'country'  => 'Serbia', 
                'tax_rate' => '20',
                'currency' => 'RSD'
            ],
            [
                'country'  => 'Seychelles', 
                'tax_rate' => '15',
                'currency' => 'SCR'
            ],
            [
                'country'  => 'Sierra Leone', 
                'tax_rate' => '15',
                'currency' => 'SSL'
            ],
            [
                'country'  => 'Singapore', 
                'tax_rate' => '7',
                'currency' => 'SGD'
            ],
            [
                'country'  => 'Sint Maarten', 
                'tax_rate' => '',
                'currency' => 'ANG'
            ],
            [
                'country'  => 'Slovakia', 
                'tax_rate' => '20',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Slovenia', 
                'tax_rate' => '22',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Solomon Islands', 
                'tax_rate' => '',
                'currency' => 'SBD'
            ],
            [
                'country'  => 'Somalia', 
                'tax_rate' => '',
                'currency' => 'SOS'
            ],
            [
                'country'  => 'South Africa', 
                'tax_rate' => '14',
                'currency' => 'ZAR'
            ],
            [
                'country'  => 'South Georgia and the South Sandwich Islands', 
                'tax_rate' => '',
                'currency' => 'GBP'
            ],
            [
                'country'  => 'South Korea', 
                'tax_rate' => '10',
                'currency' => 'KRW'
            ],
            [
                'country'  => 'Spain', 
                'tax_rate' => '21',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Sri Lanka', 
                'tax_rate' => '12',
                'currency' => 'LKR'
            ],
            [
                'country'  => 'Sudan', 
                'tax_rate' => '17',
                'currency' => 'SDG'
            ],
            [
                'country'  => 'Suriname', 
                'tax_rate' => '',
                'currency' => 'SRD'
            ],
            [
                'country'  => 'Svalbard and Jan Mayen', 
                'tax_rate' => '',
                'currency' => 'NOK'
            ],
            [
                'country'  => 'Swaziland', 
                'tax_rate' => '',
                'xurrency' => 'SZL'
            ],
            [
                'country'  => 'Sweden', 
                'tax_rate' => '25',
                'currency' => 'SEK'
            ],
            [
                'country'  => 'Switzerland', 
                'tax_rate' => '8',
                'currency' => 'CHF'
            ],
            [
                'country'  => 'Syria', 
                'tax_rate' => '',
                'currency' => 'SYP'
            ],
            
            // Countries started with an T.
            [
                'country'  => 'Taiwan',
                'tax_rate' => '5',
                'currency' => 'TWD'
            ],
            [
                'country'  => 'Tajikistan',
                'tax_rate' => '20',
                'currency' => 'TJS'
            ],
            [
                'country'  => 'Tanzania',
                'tax_rate' => '18',
                'currency' => 'TZS'
            ],
            [
                'country'  => 'Thailand',
                'tax_rate' => '10',
                'currency' => 'THB'
            ],
            [
                'country'  => 'Timor-Leste (East Timot)',
                'tax_rate' => '',
                'currency' => 'USD'
            ],
            [
                'country'  => 'Togo',
                'tax_rate' => '18',
                'currency' => 'XOF'
            ],
            [
                'country'  => 'Tokelau',
                'tax_rate' => '',
                'currency' => 'NZD'
            ],
            [
                'country'  => 'Tonga',
                'tax_rate' => '15',
                'currency' => 'TOP'
            ],
            [
                'country'  => 'Trinidad and Tobago',
                'tax_rate' => '12,5',
                'currency' => 'TTD'
            ],
            [
                'country'  => 'Tunesia',
                'tax_rate' => '18',
                'currency' => 'TND'
            ],
            [
                'country'  => 'Turkey',
                'tax_rate' => '18',
                'currency' => 'TRY'
            ],
            [
                'country'  => 'Turkmenistan',
                'tax_rate' => '15',
                'currency' => 'TMT'
            ],
            [
                'country'  => 'Turks and Caicos Islands',
                'tax_rate' => '',
                'currency' => 'USD'
            ],
            [
                'country'  => 'Tuvalu',
                'tax_rate' => '',
                'currency' => 'AUD'
            ],

            // Countries started with an U.
            [
                'country'  => 'Uganda',
                'tax_rate' => '18',
                'currency' => 'UGX'
            ],
            [
                'country'  => 'Ukraine',
                'tax_rate' => '20',
                'currency' => 'UAH'
            ],
            [
                'country'  => 'United Arab Emirates',
                'tax_rate' => '',
                'currency' => 'AED'
            ],
            [
                'country'  => 'United Kingdom',
                'tax_rate' => '20',
                'currency' => 'GBP'
            ],
            [
                'country'  => 'United States',
                'tax_rate' => '',
                'currency' => 'USD'
            ],
            [
                'country'  => 'United States Minor Outlying Islands',
                'tax_rate' => '',
                'currency' => 'UNKNOWN'
            ],
            [
                'country'  => 'Uruguay',
                'tax_rate' => '22',
                'currency' => 'UYU'
            ],
            [
                'country'  => 'Uzbekistan',
                'tax_rate' => '20',
                'currency' => 'UZS'
            ],

            // Countries started with an V.
            [
                'country'  => 'Vanuatu',
                'tax_rate' => '13',
                'currency' => 'VUV'
            ],
            [
                'country'  => 'Vatican City',
                'tax_rate' => '',
                'currency' => 'EUR'
            ],
            [
                'country'  => 'Venezuela',
                'tax_rate' => '12',
                'currency' => 'VEF'
            ],
            [
                'country'  => 'Vietnam',
                'tax_rate' => '10',
                'currency' => 'VND'
            ],
            [
                'country'  => 'Virigin Islands (British)',
                'tax_rate' => '',
                'currency' => 'GBP'
            ],
            [
                'country'  => 'Vigin Islands (US)',
                'tax_rate' => '',
                'currency' => 'USD'
            ],

            // Countries started with an W
            [
                'country'  => 'Wallis and Futuna',
                'tax_rate' => '',
                'currency' => 'XPF'
            ],
            [
                'country'  => 'Western Sahara',
                'tax_rate' => '',
                'currency' => 'UNKNOWN'
            ],

            // Countries started with an Y.
            [
                'country'  => 'Yemen',
                'tax_rate' => '',
                'currency' => 'YER'
            ],

            // Countries started with an Z
            [
                'country'  => 'Zambia',
                'tax_rate' => '16',
                'currency' => 'ZMW'
            ],
            [
                'country'  => 'Zimbabwe',
                'tax_rate' => '15',
                'currency' => 'USD'
            ]
        ]);
    }
}