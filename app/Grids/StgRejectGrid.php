<?php

namespace App\Grids;

use Closure;
use Leantony\Grid\Grid;

class StgRejectGrid extends Grid implements StgRejectGridInterface
{
    /**
     * The name of the grid
     *
     * @var string
     */
    protected $name = 'StgReject';

    /**
     * List of buttons to be generated on the grid
     *
     * @var array
     */
    protected $buttonsToGenerate = [
        // 'create',
        'view',
        // 'delete',
        'refresh',
        'export'
    ];

    /**
     * Specify if the rows on the table should be clicked to navigate to the record
     *
     * @var bool
     */
    protected $linkableRows = false;

    /**
    * Set the columns to be displayed.
    *
    * @return void
    * @throws \Exception if an error occurs during parsing of the data
    */

    protected $tableColumns = [
      "tgldapem",
      "notas",
      "namapensiunan",
      "nama_penerima",
      "penpok",
      "tanggal_skep",
      "kdjiwa",
      "error_desc",
      "error_fields",
      "error_codes"
    ];

    public function setColumns()
    {
        $this->columns = [
		    "tgldapem" => [
            "date" => true,
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "=",
                "type" => "date"
		        ],
            // "editable" => false,
		        "styles" => [
		            "column" => "tgldapem_column_header"
		        ],
		    ],
		    "notas" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "like"
		        ]
		    ],
		    "penpok" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "="
		        ]
		    ],
        "namapensiunan" => [
            "search" => [
                "enabled" => true
            ],
            "filter" => [
                "enabled" => true,
                "operator" => "like"
            ]
        ],
        "nama_penerima" => [
            "search" => [
                "enabled" => true
            ],
            "filter" => [
                "enabled" => true,
                "operator" => "like"
            ],
            "styles" => [
                "column" => "nama_penerima_column_header"
            ],
        ],
        "tanggal_skep"=> [
            "date" => true,
            "search" => [
                "enabled" => true
            ],
            "filter" => [
                "enabled" => true,
                "operator" => "=",
                "type" => "date"

            ],
		        "styles" => [
		            "column" => "tanggal_skep_header"
		        ]
        ],
        "kdjiwa"=> [
            "search" => [
                "enabled" => true
            ],
            "filter" => [
                "enabled" => true,
                "operator" => "like"
            ]
        ],
        "error_desc"=> [
            "search" => [
                "enabled" => true
            ],
            "filter" => [
                "enabled" => true,
                "operator" => "like"
            ],
		        "styles" => [
		            "column" => "error_column_header"
		        ],
            "raw" => true,
            "editable" => false,
            "presenter" => function($columnData, $columnName) {
                return "<div style='max-width:135px;'>".$columnData[$columnName]."</div>";
            }
        ],
        "error_fields"=> [
            "search" => [
                "enabled" => true
            ],
            "filter" => [
                "enabled" => true,
                "operator" => "like"
            ],
		        "styles" => [
		            "column" => "error_column_header"
		        ],
            "raw" => true,
            "editable" => false,
            "presenter" => function($columnData, $columnName) {
                return "<div style='max-width:135px;'>".$columnData[$columnName]."</div>";
            }
        ],
        "error_codes"=> [
            "search" => [
                "enabled" => true
            ],
            "filter" => [
                "enabled" => true,
                "operator" => "like"
            ],
		        "styles" => [
		            "column" => "error_column_header"
		        ],
            "raw" => true,
            "editable" => false,
            "presenter" => function($columnData, $columnName) {
                return "<div style='max-width:135px;'>".$columnData[$columnName]."</div>";
            }
        ]
		];
      // $this->columns = [
      // "unique_key" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tgldapem" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kdjnstrans" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "jenis" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "notas" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kdjiwa" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "penpok" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tistri" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tanak" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tp" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tkd" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tpp" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tpajak" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tberas" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tcacat" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "ttewas" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tbulat" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kotor" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "ppajak" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "paskes" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "pkpkn" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "pkasda" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "ptaspen" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "psewa" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "passos" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "palimentasi" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "potongan" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "bersih" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kodebyr" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kdjnsdapem" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "namapensiunan" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tgl_lahir_pensiunan" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "nama_penerima" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tgl_lahir_penerima" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kodecabang" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tmtpensiun" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "nomor_skep" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tanggal_skep" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "penerbit_skep" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "nip" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "norutdapem" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kdpangkat" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "norek" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kdhubkel" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "rapel" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tdahor" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kdhitung" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kdsifatpok" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "masker" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "jmlistri" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "npwp" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tgldiambil" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "infobank" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tgr" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "jnssetor" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "tglsetor" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "updstamp" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "inputer" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "kdotentikasi" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "number_of_error" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "error_desc" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "error_fields" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "error_codes" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "thn_tgldapem" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "thn_tgl_skep" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "cleansing_flag" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "cleansing_date" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "cleansed_column" => [
      //     "search" => [
      //         "enabled" => true
      //     ],
      //     "filter" => [
      //         "enabled" => true,
      //         "operator" => "="
      //     ]
      // ],
      // "created_at" => [
      //     "sort" => false,
      //     "date" => "true",
      //     "filter" => [
      //         "enabled" => true,
      //         "type" => "date",
      //         "operator" => "<="
      //     ]
      // ]
    }

    /**
     * Set the links/routes. This are referenced using named routes, for the sake of simplicity
     *
     * @return void
     */
    public function setRoutes()
    {
        // searching, sorting and filtering
        $this->setIndexRouteName('stgreject.index');

        // crud support
        $this->setCreateRouteName('stgreject.create');
        $this->setViewRouteName('stgreject.show');
        $this->setDeleteRouteName('stgreject.destroy');

        // default route parameter
        $this->setDefaultRouteParameter('unique_key');
    }

    /**
    * Return a closure that is executed per row, to render a link that will be clicked on to execute an action
    *
    * @return Closure
    */
    public function getLinkableCallback(): Closure
    {
        return function ($gridName, $item) {
            return route($this->getViewRouteName(), [$gridName => $item->unique_key]);
        };
    }

    /**
    * Configure rendered buttons, or add your own
    *
    * @return void
    */
    public function configureButtons()
    {
        // call `addRowButton` to add a row button
        // call `addToolbarButton` to add a toolbar button
        // call `makeCustomButton` to do either of the above, but passing in the button properties as an array

        // call `editToolbarButton` to edit a toolbar button
        // call `editRowButton` to edit a row button
        // call `editButtonProperties` to do either of the above. All the edit functions accept the properties as an array

        $this->editRowButton('view', [
            'icon' => 'fa-edit',
            'name' => 'Edit',
            'class' => 'btn btn-outline-danger btn-sm'
        ]);

        $this->editToolbarButton('refresh', [
            'class' => 'btn btn-danger'
        ]);
    }

    /**
    * Returns a closure that will be executed to apply a class for each row on the grid
    * The closure takes two arguments - `name` of grid, and `item` being iterated upon
    *
    * @return Closure
    */
    public function getRowCssStyle(): Closure
    {
        return function ($gridName, $item) {
            // e.g, to add a success class to specific table rows;
            // return $item->unique_key % 2 === 0 ? 'table-success' : '';
            return "";
        };
    }
}
