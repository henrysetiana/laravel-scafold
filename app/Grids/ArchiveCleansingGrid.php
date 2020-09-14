<?php

namespace App\Grids;

use Closure;
use Leantony\Grid\Grid;

class ArchiveCleansingGrid extends Grid implements ArchiveCleansingGridInterface
{
    /**
     * The name of the grid
     *
     * @var string
     */
    protected $name = 'ArchiveCleansing';

    /**
     * List of buttons to be generated on the grid
     *
     * @var array
     */
    protected $buttonsToGenerate = [
        //'view',
        'refresh',
        'export'
    ];

    /**
     * Specify if the rows on the table should be clicked to navigate to the record
     *
     * @var bool
     */
    protected $linkableRows = false;

    protected $tableColumns = [
      "tgldapem",
      "notas",
      "namapensiunan",
      "nama_penerima",
      "penpok",
      "tanggal_skep",
      "kdjiwa",
      "cleansed_column",
      "updated_at",
    ];



    /**
    * Set the columns to be displayed.
    *
    * @return void
    * @throws \Exception if an error occurs during parsing of the data
    */
    public function setColumns()
    {
        $this->columns = [
		    "tgldapem" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "=",
                "type" => "date"
		        ]
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
		        ]
		    ],
		    "tanggal_skep" => [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "=",
                "type" => "date"
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
        "cleansed_column"=> [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "like"
		        ]
		    ],
        "updated_at"=> [
		        "search" => [
		            "enabled" => true
		        ],
		        "filter" => [
		            "enabled" => true,
		            "operator" => "=",
                "type" => "date"
		        ]
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
        $this->setIndexRouteName('archivecleansing.index');

        // crud support
        $this->setCreateRouteName('archivecleansing.create');
        $this->setViewRouteName('archivecleansing.show');
        $this->setDeleteRouteName('archivecleansing.destroy');

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
