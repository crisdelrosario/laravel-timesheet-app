<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *     version="1.0",
 *     title="Timer",
 *     description="Timer management",
 *     @OA\Contact(name="C")
 * )
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="API server"
 * )
 */
class TimerController extends Controller
{
  /*
        TIME CONVERSION CHART
        (Minutes to Decimal Hours)

        Minutes | Decimal Hours | Minutes | Decimal Hours | Minutes | Decimal Hours
        ---------------------------------------------------------------------------
        1         .02             21        .35             41        .68
        2         .03             22        .37             42        .70
        3         .05             23        .38             43        .72
        4         .07             24        .40             44        .73
        5         .08             25        .42             45        .75
        6         .10             26        .43             46        .77
        7         .12             27        .45             47        .78
        8         .13             28        .47             48        .80
        9         .15             29        .48             49        .82
        10        .17             30        .50             50        .83
        11        .18             31        .52             51        .85
        12        .20             32        .53             52        .87
        13        .22             33        .55             53        .88
        14        .23             34        .57             54        .90
        15        .25             35        .58             55        .92
        16        .27             36        .60             56        .93
        17        .28             37        .62             57        .95
        18        .30             38        .63             58        .97
        19        .32             39        .65             59        .98
        20        .33             40        .67             60        1.0 
  */
}
