<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Albania',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Algeria',
                'tax_rate' => '17'
            ],
            [
                'country'  => 'American Samoa',
                'tax_rate' => '0'
            ],
            [
                'country'  => 'Andorra',
                'tax_rate' => '4,5'
            ],
            [
                'country'  => 'Angola',
                'tax_rate' => '30'
            ],
            [
                'country'  => 'Anguilla',
                'tax_rate' => '10'
            ],
            [
                'country'  => 'Antartica',
                'tax_rate' => '0'
            ],
            [
                'country'  => 'Antigua and Barbuda',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Argentina',
                'tax_rate' => '21'
            ],
            [
                'country'  => 'Armenia',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Aruba',
                'tax_rate' => '25'
            ],
            [
                'country'  => 'Australia',
                'tax_rate' => '10'
            ],
            [
                'country'  => 'Austria',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Azerbaijan',
                'tax_rate' => '18'
            ],

            // Countries that begin with B
            [
                'country'  => 'Bahamas',
                'tax_rate' => '7,5'
            ],
            [
                'country'  => 'Bahrain',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Bangladesh',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Barbados',
                'tax_rate' => '17,5'
            ],
            [
                'country'  => 'Belarus',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Belgium',
                'tax_rate' => '21'
            ],
            [
                'country'  => 'Belize',
                'tax_rate' => '12,5'
            ],
            [
                'country'  => 'Benin',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Bermuda',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Bhutan',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Bolivia',
                'tax_rate' => '13'
            ],
            [
                'country'  => 'Bonaire, Sint Eustatius ans Saba',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Bosnia and Herzegovina',
                'tax_rate' => '17'
            ],
            [
                'country'  => 'Botswana',
                'tax_rate' => '12'
            ],
            [
                'country'  => 'Bouvet Island',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Brazil',
                'tax_rate' => '42'
            ],
            [
                'country'  => 'British Indian Ocean Territory',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Brunei',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Bulgaria',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Burkina Faso',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Burundi',
                'tax_rate' => '18'
            ],

            // Countries that begin with a C.
            [
                'country'  => 'Cambodia',
                'tax_rate' => '10'
            ],
            [
                'country'  => 'Cameroon',
                'tax_rate' => '19,25'
            ],
            [
                'country'  => 'Canada',
                'tax_rate' => '5'
            ],
            [
                'country'  => 'Cape Verde',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Cayman Islands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Central African Republic',
                'tax_rate' => '19'
            ],
            [
                'country'  => 'Chad',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Chile',
                'tax_rate' => '19'
            ],
            [
                'country'  => 'China',
                'tax_rate' => '17'
            ],
            [
                'country'  => 'Christmas Island',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Cocos (Keeling) Islands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Colombia',
                'tax_rate' => '16'
            ],
            [
                'country'  => 'Comoros',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Cook islands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Costa Rica',
                'tax_rate' => '13'
            ],
            [
                'country'  => 'Cote de azur',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Croatia',
                'tax_rate' => '25'
            ],
            [
                'country'  => 'Cuba',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Curacao',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Cyprus',
                'tax_rate' => '19'
            ],
            [
                'country'  => 'Czech Republic',
                'tax_rate' => '21'
            ],

            // Countries that begin with a D.
            [
                'country'  => 'Democratic Republic of the congo.',
                'tax_rate' => '16'
            ],
            [
                'country'  => 'Denmark',
                'tax_rate' => '25'
            ],
            [
                'country'  => 'Djibouti',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Dominica',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Dominican Republic',
                'tax_rate' => '18'
            ],

            // Countries that begin with a E.
            [
                'country'   => 'Ecuador',
                'tax_reate' => '12'
            ],
            [
                'country'   => 'Egypt',
                'tax_reate' => '10'
            ],
            [
                'country'   => 'El Salvador',
                'tax_reate' => '13'
            ],
            [
                'country'   => 'Equatorial Guinea',
                'tax_reate' => '15'
            ],
            [
                'country'   => 'Eritrea',
                'tax_reate' => ''
            ],
            [
                'country'   => 'Estonia',
                'tax_reate' => '20'
            ],
            [
                'country'   => 'Ethiopia',
                'tax_reate' => '15'
            ],

            // Countries that begin with an F
            [
                'country'  => 'Falkland islands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Faroe Islands',
                'tax_rate' => '25'
            ],
            [
                'country'  => 'Fiji',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Finland',
                'tax_rate' => '24'
            ],
            [
                'country'  => 'France',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'French Guiana',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'French Polynesia',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'French Southern Territory',
                'tax_rate' => '20'
            ],

            // Countries started with an G.
            [
                'country'  => 'Gabon',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Gambia',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Georgia',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Germany',
                'tax_rate' => '19'
            ],
            [
                'country'  => 'Ghana',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Gibraltar',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Greece',
                'tax_rate' => '24'
            ],
            [
                'country'  => 'Greenland',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Grenada',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Guadaloupe',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Guam',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Guatamala',
                'tax_rate' => '12'
            ],
            [
                'country'  => 'Guernsey',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Guinea',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Guinea-Bissau',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Guyana',
                'tax_rate' => '16'
            ],

            // Countries that started with an H.
            [
                'country'  => 'Haiti',
                'tax_rate' => '10'
            ],
            [
                'country'  => 'Heard Island and McDonals Island',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Honduras',
                'tax_rate' => '12'
            ],
            [
                'country'  => 'Hong Kong',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Hungary',
                'tax_rate' => '27'
            ],

            // Countries that started with an I.
            [
                'country'  => 'Iceland',
                'tax_rate' => '24'
            ],
            [
                'country'  => 'India',
                'tax_rate' => '5,5'
            ],
            [
                'country'  => 'Indonesia',
                'tax_rate' => '10'
            ],
            [
                'country'  => 'Iran',
                'tax_rate' => '9'
            ],
            [
                'country'  => 'Iraq',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Ireland',
                'tax_rate' => '23'
            ],
            [
                'country'  => 'Isle of Man',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Israel',
                'tax_rate' => '17'
            ],
            [
                'country'  => 'Italy',
                'tax_rate' => '22'
            ],

            // Countries that started with an J
            [
                'country'  => 'Jamaica',
                'tax_rate' => '12,5'
            ],
            [
                'country'  => 'Japan',
                'tax_rate' => '8'
            ],
            [
                'country'  => 'Jersey',
                'tax_rate' => '5'
            ],
            [
                'country'  => 'Jordan',
                'tax_rate' => '16'
            ],

            // Countries that started with an K.
            [
                'country'  => 'Kazakhstan',
                'tax_rate' => '12'
            ],
            [
                'country'  => 'Kenya',
                'tax_rate' => '16'
            ],
            [
                'country'  => 'Kiribati',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Kosovo',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Kuwait',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Kyrgyzstan',
                'tax_rate' => '20'
            ],

            // Countries that started with an L
            [
                'country'  => 'Laos',
                'tax_rate' => '10',
            ],
            [
                'country'  => 'Latvia',
                'tax_rate' => '21',
            ],
            [
                'country'  => 'Lebanon',
                'tax_rate' => '10',
            ],
            [
                'country'  => 'Lesotho',
                'tax_rate' => '14',
            ],
            [
                'country'  => 'Liberia',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Libya',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Liechtenstein',
                'tax_rate' => '8',
            ],
            [
                'country'  => 'Lithuania',
                'tax_rate' => '21',
            ],
            [
                'country'  => 'Luxembourg',
                'tax_rate' => '17',
            ],

            // Countries that started with an M.
            [
                'country'  => 'Macao',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Macedonia',
                'tax_rate' => '18',
            ],
            [
                'country'  => 'Madagascar',
                'tax_rate' => '20',
            ],
            [
                'country'  => 'Malawi',
                'tax_rate' => '16,5',
            ],
            [
                'country'  => 'Malaysia',
                'tax_rate' => '6',
            ],
            [
                'country'  => 'Maldives',
                'tax_rate' => '6',
            ],
            [
                'country'  => 'Mali',
                'tax_rate' => '18',
            ],
            [
                'country'  => 'Malta',
                'tax_rate' => '18',
            ],
            [
                'country'  => 'Marshall Islands',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Martinique',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Mauritinia',
                'tax_rate' => '14',
            ],
            [
                'country'  => 'Mauritius',
                'tax_rate' => '15',
            ],
            [
                'country'  => 'Mayotte',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Mexico',
                'tax_rate' => '16',
            ],
            [
                'country'  => 'Micronesia',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Moldava',
                'tax_rate' => '20',
            ],
            [
                'country'  => 'Monaco',
                'tax_rate' => '19,6',
            ],
            [
                'country'  => 'Mongolia',
                'tax_rate' => '10',
            ],
            [
                'country'  => 'Montenegro',
                'tax_rate' => '19',
            ],
            [
                'country'  => 'Montserrat',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Morocco',
                'tax_rate' => '20',
            ],
            [
                'country'  => 'Mozambique',
                'tax_rate' => '17',
            ],
            [
                'country'  => 'Myanmar (Burma)',
                'tax_rate' => '',
            ],

            // Countries that started with an N
            [
                'country'  => 'Namibia',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Nauru',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Nepal',
                'tax_rate' => '13'
            ],
            [
                'country'  => 'Netherlands',
                'tax_rate' => '21'
            ],
            [
                'country'  => 'New Caledonia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'New Zealand',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Nicaragua',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Niger',
                'tax_rate' => '19'
            ],
            [
                'country'  => 'Nigeria',
                'tax_rate' => '5'
            ],
            [
                'country'  => 'Niue',
                'tax_rate' => '5'
            ],
            [
                'country'  => 'Norfolk Island',
                'tax_rate' => ''
            ],
            [
                'country'  => 'North Korea',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Northern Mariana Islands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Norway',
                'tax_rate' => '25'
            ],

            // Countries started with an O.
            [
                'country'  => 'Oman',
                'tax_rate' => ''
            ],

            // Countries started with an P.
            [
                'country'  => 'Pakistan',
                'tax_rate' => '17'
            ],
            [
                'country'  => 'Palau',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Palestine',
                'tax_rate' => '16'
            ],
            [
                'country'  => 'Panama',
                'tax_rate' => '7'
            ],
            [
                'country'  => 'Papua New Guinea',
                'tax_rate' => '10'
            ],
            [
                'country'  => 'Paraguay',
                'tax_rate' => '10'
            ],
            [
                'country'  => 'Peru',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Phillipines',
                'tax_rate' => '12'
            ],
            [
                'country'  => 'Pitcaim',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Poland',
                'tax_rate' => '23'
            ],
            [
                'country'  => 'Portugal',
                'tax_rate' => '23'
            ],
            [
                'country'  => 'Puerto Rico',
                'tax_rate' => ''
            ],

            // Countries started with an Q.
            [
                'country'  => 'Qatar',
                'tax_rate' => ''
            ],

            // Countries started with an R.
            [
                'country'  => 'Reunion',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Romania',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Russia',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Rwanda',
                'tax_rate' => '18'
            ],

            // Countries started with an S.
            [
                'country'  => 'Saint Barthelemy', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Saint Helena', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Saint Kitts and Nevis', 
                'tax_rate' => '17'
            ],
            [
                'country'  => 'Saint Lucia', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Saint Martin', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Saint Pierre and Miquelon', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Saint Vincent and the Grenadines', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Samoa', 
                'tax_rate' => '15'
            ],
            [
                'country'  => 'San Marino', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'San Tome and Principe', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Saudi Arabia', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Senegal', 
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Serbia', 
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Seychelles', 
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Sierra Leone', 
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Singapore', 
                'tax_rate' => '7'
            ],
            [
                'country'  => 'Sint Maarten', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Slovakia', 
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Slovenia', 
                'tax_rate' => '22'
            ],
            [
                'country'  => 'Solomon Islands', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Somalia', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'South Africa', 
                'tax_rate' => '14'
            ],
            [
                'country'  => 'South Georgia and the South Sandwich Islands', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'South Korea', 
                'tax_rate' => '10'
            ],
            [
                'country'  => 'Spain', 
                'tax_rate' => '21'
            ],
            [
                'country'  => 'Sri Lanka', 
                'tax_rate' => '12'
            ],
            [
                'country'  => 'Sudan', 
                'tax_rate' => '17'
            ],
            [
                'country'  => 'Suriname', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Svalbard and Jan Mayen', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Swaziland', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Sweden', 
                'tax_rate' => '25'
            ],
            [
                'country'  => 'Switzerland', 
                'tax_rate' => '8'
            ],
            [
                'country'  => 'Syria', 
                'tax_rate' => ''
            ],
            
            // Countries started with an T.
            [
                'country'  => 'Taiwan',
                'tax_rate' => '5'
            ],
            [
                'country'  => 'Tajikistan',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'Tanzania',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Thailand',
                'tax_rate' => '10'
            ],
            [
                'country'  => 'Timor-Leste (East Timot)',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Togo',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Tokelau',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Tonga',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Trinidad and Tobago',
                'tax_rate' => '12,5'
            ],
            [
                'country'  => 'Tunesia',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Turkey',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Turkmenistan',
                'tax_rate' => '15'
            ],
            [
                'country'  => 'Turks and Caicos Islands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Tuvalu',
                'tax_rate' => ''
            ],

            // Countries started with an U.
            [
                'country'  => 'Uganda',
                'tax_rate' => '18'
            ],
            [
                'country'  => 'Ukraine',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'United Arab Emirates',
                'tax_rate' => ''
            ],
            [
                'country'  => 'United Kingdom',
                'tax_rate' => '20'
            ],
            [
                'country'  => 'United States',
                'tax_rate' => ''
            ],
            [
                'country'  => 'United States Minor Outlying Islands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Uruguay',
                'tax_rate' => '22'
            ],
            [
                'country'  => 'Uzbekistan',
                'tax_rate' => '20'
            ],

            // Countries started with an V.
            [
                'country'  => 'Vanuatu',
                'tax_rate' => '13'
            ],
            [
                'country'  => 'Vatican City',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Venezuela',
                'tax_rate' => '12'
            ],
            [
                'country'  => 'Vietnam',
                'tax_rate' => '10'
            ],
            [
                'country'  => 'Virigin Islands (British)',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Vigin Islands (US)',
                'tax_rate' => ''
            ],

            // Countries started with an W
            [
                'country'  => 'Wallis and Futuna',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Western Sahara',
                'tax_rate' => ''
            ],

            // Countries started with an Y.
            [
                'country'  => 'Yemen',
                'tax_rate' => ''
            ],

            // Countries started with an Z
            [
                'country'  => 'Zambia',
                'tax_rate' => '16'
            ],
            [
                'country'  => 'Zimbabwe',
                'tax_rate' => '15'
            ]
        ]);
    }
}