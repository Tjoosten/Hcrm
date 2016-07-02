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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Albania',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Algeria',
                'tax_rate' => ''
            ],
            [
                'country'  => 'American Samoa',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Andorra',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Angola',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Anguilla',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Antartica',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Antigua and Barbuda',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Argentina',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Armenia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Aruba',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Australia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Austria',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Azerbaijan',
                'tax_rate' => ''
            ],

            // Countries that begin with B
            [
                'country'  => 'Bahamas',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Bahrain',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Bangladesh',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Barbados',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Belarus',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Belgium',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Belize',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Benin',
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Bonaire, Sint Eustatius ans Saba',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Bosnia and Herzegovina',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Botswana',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Bouvet Island',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Brazil',
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Burkina Faso',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Burundi',
                'tax_rate' => ''
            ],

            // Countries that begin with a C.
            [
                'country'  => 'Cambodia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Cameroon',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Canada',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Cape Verde',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Cayman Islands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Central African Republic',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Chad',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Chile',
                'tax_rate' => ''
            ],
            [
                'country'  => 'China',
                'tax_rate' => ''
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
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Cote de azur',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Croatia',
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Czech Republic',
                'tax_rate' => ''
            ],

            // Countries that begin with a D.
            [
                'country'  => 'Democratic Republic of the congo.',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Denmark',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Djibouti',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Dominica',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Dominican Republic',
                'tax_rate' => ''
            ],

            // Countries that begin with a E.
            [
                'country'   => 'Ecuador',
                'tax_reate' => ''
            ],
            [
                'country'   => 'Egypt',
                'tax_reate' => ''
            ],
            [
                'country'   => 'El Salvador',
                'tax_reate' => ''
            ],
            [
                'country'   => 'Equatorial Guinea',
                'tax_reate' => ''
            ],
            [
                'country'   => 'Eritrea',
                'tax_reate' => ''
            ],
            [
                'country'   => 'Estonia',
                'tax_reate' => ''
            ],
            [
                'country'   => 'Ethiopia',
                'tax_reate' => ''
            ],

            // Countries that begin with an F
            [
                'country'  => 'Falkland islands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Faroe Islands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Fiji',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Finland',
                'tax_rate' => ''
            ],
            [
                'country'  => 'France',
                'tax_rate' => ''
            ],
            [
                'country'  => 'French Guiana',
                'tax_rate' => ''
            ],
            [
                'country'  => 'French Polynesia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'French Southern Territory',
                'tax_rate' => ''
            ],

            // Countries started with an G.
            [
                'country'  => 'Gabon',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Gambia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Georgia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Germany',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Ghana',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Gibraltar',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Greece',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Greenland',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Grenada',
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Guernsey',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Guinea',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Guinea-Bissau',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Guyana',
                'tax_rate' => ''
            ],

            // Countries that started with an H.
            [
                'country'  => 'Haiti',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Heard Island and McDonals Island',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Honduras',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Hong Kong',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Hungary',
                'tax_rate' => ''
            ],

            // Countries that started with an I.
            [
                'country'  => 'Iceland',
                'tax_rate' => ''
            ],
            [
                'country'  => 'India',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Indonesia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Iran',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Iraq',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Ireland',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Isle of Man',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Israel',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Italy',
                'tax_rate' => ''
            ],

            // Countries that started with an J
            [
                'country'  => 'Jamaica',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Japan',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Jersey',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Jordan',
                'tax_rate' => ''
            ],

            // Countries that started with an K.
            [
                'country'  => 'Kazakhstan',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Kenya',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Kiribati',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Kosovo',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Kuwait',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Kyrgyzstan',
                'tax_rate' => ''
            ],

            // Countries that started with an L
            [
                'country'  => 'Laos',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Latvia',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Lebanon',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Lesotho',
                'tax_rate' => '',
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
                'tax_rate' => '',
            ],
            [
                'country'  => 'Lithuania',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Luxembourg',
                'tax_rate' => '',
            ],

            // Countries that started with an M.
            [
                'country'  => 'Macao',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Macedonia',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Madagascar',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Malawi',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Malaysia',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Maldives',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Mali',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Malta',
                'tax_rate' => '',
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
                'tax_rate' => '',
            ],
            [
                'country'  => 'Mauritius',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Mayotte',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Mexico',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Micronesia',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Moldava',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Monaco',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Mongolia',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Montenegro',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Montserrat',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Morocco',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Mozambique',
                'tax_rate' => '',
            ],
            [
                'country'  => 'Myanmar (Burma)',
                'tax_rate' => '',
            ],

            // Countries that started with an N
            [
                'country'  => 'Namibia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Nauru',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Nepal',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Netherlands',
                'tax_rate' => ''
            ],
            [
                'country'  => 'New Caledonia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'New Zealand',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Nicaragua',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Niger',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Nigeria',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Niue',
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],

            // Countries started with an O.
            [
                'country'  => 'Oman',
                'tax_rate' => ''
            ],

            // Countries started with an P.
            [
                'country'  => 'Pakistan',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Palau',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Palestine',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Panama',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Papua New Guinea',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Paraguay',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Peru',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Phillipines',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Pitcaim',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Poland',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Portugal',
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Russia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Rwanda',
                'tax_rate' => ''
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
                'tax_rate' => ''
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
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Serbia', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Seychelles', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Sierra Leone', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Singapore', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Sint Maarten', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Slovakia', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Slovenia', 
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'South Georgia and the South Sandwich Islands', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'South Korea', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Spain', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Sri Lanka', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Sudan', 
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Switzerland', 
                'tax_rate' => ''
            ],
            [
                'country'  => 'Syria', 
                'tax_rate' => ''
            ],
            
            // Countries started with an T.
            [
                'country'  => 'Taiwan',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Tajikistan',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Tanzania',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Thailand',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Timor-Leste (East Timot)',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Togo',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Tokelau',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Tonga',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Trinidad and Tobago',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Tunesia',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Turkey',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Turkmenistan',
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Ukraine',
                'tax_rate' => ''
            ],
            [
                'country'  => 'United Arab Emirates',
                'tax_rate' => ''
            ],
            [
                'country'  => 'United Kingdom',
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Uzbekistan',
                'tax_rate' => ''
            ],

            // Countries started with an V.
            [
                'country'  => 'Vanuatu',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Vatican City',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Venezuela',
                'tax_rate' => ''
            ],
            [
                'country'  => 'Vietnam',
                'tax_rate' => ''
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
                'tax_rate' => ''
            ],
            [
                'country'  => 'Zimbabwe',
                'tax_rate' => ''
            ]
        ]);
    }
}