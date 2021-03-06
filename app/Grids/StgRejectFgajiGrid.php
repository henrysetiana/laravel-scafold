<?php

namespace App\Grids;

use Closure;
use Leantony\Grid\Grid;

class StgRejectFgajiGrid extends Grid implements StgRejectFgajiGridInterface
{
    /**
     * The name of the grid
     *
     * @var string
     */
    protected $name = 'StgRejectFgaji';

    /**
     * List of buttons to be generated on the grid
     *
     * @var array
     */
    protected $buttonsToGenerate = [
        'view',
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
      "nip",
      "glrdepan",
      "nama",
      "glrbelakang",
      "tgllhr",
      "tglgaji",
      "tmtstop",
      "npwp",
      "prsngapok",
      "gapok",
      "error_desc",
      "error_fields",
      "error_codes"
    ];
    public function setColumns()
    {
        $this->columns = [
		    "nip" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "like"
		        ],
            // "editable" => false,
		    ],
		    "nama" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "like"
		        ],
            "acuan_columns" => [
              "gelar_depan_acuan",
              "nama_acuan",
              "gelar_belakang_acuan"
            ],
            "correct_acuan_column_index" => 1
		    ],
		    "glrdepan" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "like"
		        ],
            "acuan_columns" => [
              "gelar_depan_acuan",
            ],
            "correct_acuan_column_index" => 0
		    ],
		    "glrbelakang" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "like"
		        ],
            "acuan_columns" => [
              "gelar_belakang_acuan"
            ],
            "correct_acuan_column_index" => 0
		    ],
		    "tgllhr" => [
            "date" => "true",
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "like",
                "type" => "date"
		        ],
		        "styles" => [
		            "column" => "tgl_column_header"
		        ],
		    ],
		    "tglgaji" => [

            "date" => "true",
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "like",
                "type" => "date"
		        ],
		        "styles" => [
		            "column" => "tgl_column_header"
		        ],
		    ],
		    "tmtstop" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "=",
                "type" => "date"
		        ],
		        "styles" => [
		            "column" => "tgl_column_header"
		        ],
		    ],
		    "npwp" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "like"
		        ]
		    ],
		    "prsngapok" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "like"
		        ]
		    ],
        "gapok" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "="
		        ]
		    ],
		    "error_desc" => [
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
		    "error_fields" => [
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
		    "error_codes" => [
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
		];
    }

    /**
     * Set the links/routes. This are referenced using named routes, for the sake of simplicity
     *
     * @return void
     */
    public function setRoutes()
    {
        // searching, sorting and filtering
        $this->setIndexRouteName('stgrejectfgaji.index');

        // crud support
        $this->setCreateRouteName('stgrejectfgaji.create');
        $this->setViewRouteName('stgrejectfgaji.show');
        $this->setDeleteRouteName('stgrejectfgaji.destroy');

        // default route parameter
        $this->setDefaultRouteParameter('id');
    }

    /**
    * Return a closure that is executed per row, to render a link that will be clicked on to execute an action
    *
    * @return Closure
    */
    public function getLinkableCallback(): Closure
    {
        return function ($gridName, $item) {
            return route($this->getViewRouteName(), [$gridName => $item->id]);
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
            // return $item->id % 2 === 0 ? 'table-success' : '';
            return "";
        };
    }
}
