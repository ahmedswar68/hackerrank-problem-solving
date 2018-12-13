<?php

// https://www.hackerrank.com/challenges/minimum-distances/problem
function minimumDistances($b)
{
  $array_length = count($b);
  if ($array_length >= 1 && $array_length <= pow(10, 3)) {
    $a = [];
    for ($i = 0; $i < count($b); $i++) {
      if ($b[$i] >= 1 && $b[$i] <= pow(10, 5)) {
        $a[] = $b[$i];
      }
    }
    if (empty($a)) return -1;
    $new = array_count_values($a);
    if (max($new) == 1) return -1;
    arsort($new);

    $max_occ=[];
    foreach ($new as $k => $v) {
      if ($v > 0) {
        $max_occ[] = $k;
      }
      if(count($max_occ)==2) {
        break;
      }
    }

    $x = $max_occ[0];
    $y = $max_occ[1];
    $st_pair = array_keys($a, $x);
    $nd_pair = array_keys($a, $y);
    return min(abs($st_pair[0] - $st_pair[1]), abs($nd_pair[0] - $nd_pair[1]));
  }
}

echo minimumDistances([92020, 81760, 74143, 79550, 78365, 22559, 31539, 75299, 73160, 16955, 83706, 88462, 89329, 61786, 82989, 75867, 18047, 70648, 27171, 3369, 12625, 22975, 42538, 96532, 55973, 25025, 18515, 66395, 7724, 93487, 27618, 99745, 75247, 18113, 95647, 53612, 57024, 27186, 45263, 46537, 60493, 45321, 34999, 66174, 7108, 17988, 58394, 41507, 4988, 1917, 61228, 17613, 24892, 20118, 30497, 97218, 45144, 49013, 63613, 69220, 42500, 7583, 68965, 17748, 42049, 64613, 87712, 99073, 8151, 32976, 45610, 84997, 78297, 96961, 51171, 1757, 14949, 9565, 59616, 19937, 11483, 20844, 53903, 52727, 40963, 84400, 49945, 2459, 49765, 29910, 88031, 92266, 37494, 56997, 26366, 95895, 37962, 14078, 94968, 62465, 63406, 56931, 63814, 58056, 53892, 31338, 59813, 85194, 57255, 35782, 21483, 85090, 56626, 75386, 37818, 13941, 76139, 4115, 32752, 25904, 34026, 20784, 34522, 87872, 94133, 60888, 83767, 48447, 74967, 95087, 27264, 54725, 68370, 91079, 12781, 22263, 22417, 88947, 23809, 79672, 24729, 45292, 64763, 81355, 37031, 18933, 11649, 29522, 23048, 44401, 55426, 73426, 81537, 6301, 77650, 75670, 67189, 77769, 40469, 58508, 72857, 67734, 13234, 41227, 58813, 26015, 79842, 97582, 31314, 3651, 93606, 56043, 65296, 74721, 53751, 18679, 93654, 65400, 48201, 33055, 26153, 19979, 6481, 7691, 26280, 484, 99713, 93470, 78253, 40183, 51978, 67462, 24269, 81564, 8690, 99434, 7580, 4884, 97016, 38894, 8536, 90622, 11290, 90184, 81696, 65041, 8863, 75350, 30441, 57064, 24757, 72946, 93395, 31239, 96989, 19676, 48075, 96703, 29498, 26328, 53238, 97828, 93791, 77507, 79393, 18833, 76941, 3325, 23717, 90309, 58571, 48605, 97283, 69861, 55141, 78979, 34902, 64004, 70682, 81695, 37420, 95439, 54642, 30816, 43030, 51631, 66844, 91105, 64686, 96342, 33786, 34276, 94170, 27577, 28135, 89915, 62762, 21428, 93240, 2831, 11737, 51812, 51437, 25373, 21673, 22930, 4352, 72928, 86935, 75034, 54623, 40707, 86826, 25617, 71523, 29856, 93601, 54719, 37314, 58287, 67413, 71100, 8916, 61584, 98677, 37051, 51499, 77791, 58480, 61092, 80622, 86569, 12904, 48411, 11942, 34577, 71342, 32647, 23857, 74629, 24033, 78481, 15336, 10859, 20450, 3212, 40716, 14051, 57931, 78030, 88691, 25345, 49130, 97607, 3281, 64159, 51010, 71132, 58302, 9490, 32224, 38924, 96060, 61480, 87336, 24354, 12410, 75030, 57001, 36267, 49659, 81035, 31100, 81347, 91894, 51551, 911, 48962, 65602, 75195, 43344, 54293, 16892, 92474, 68252, 20173, 72985, 19263, 7657, 47639, 45105, 56234, 86564, 41165, 17714, 90252, 81872, 30124, 81634, 38873, 82744, 31293, 19908, 13844, 28992, 11803, 65395, 29904, 60765, 30998, 5099, 20462, 1643, 21991, 12936, 86248, 58516, 2274, 21863, 82525, 49913, 66968, 38759, 52829, 24486, 72826, 43081, 6358, 19302, 41067, 45231, 2046, 72360, 65140, 15891, 17705, 93295, 81286, 47609, 70412, 28636, 69060, 90874, 46632, 7403, 20163, 49232, 65919, 38789, 71095, 64796, 5054, 38063, 3556, 57884, 78901, 92734, 17317, 85259, 12036, 58385, 30491, 14083, 47097, 11983, 46326, 81154, 21630, 43964, 28763, 92042, 88953, 14175, 99269, 35585, 21578, 19432, 84817, 3849, 74573, 72264, 84998, 79627, 10327, 4906, 37511, 89229, 97640, 71181, 90840, 9676, 45918, 37683, 40111, 93015, 49666, 2789, 74170, 87648, 46754, 19285, 96043, 35707, 49813, 95312, 87644, 87743, 31096, 88813, 7945, 5669, 61077, 92943, 85296, 71404, 97849, 39160, 76985, 95489, 26693, 67826, 21517, 72611, 5509, 77981, 81978, 71528, 80770, 56148, 75528, 27524, 91786, 71571, 79583, 57951, 66883, 67227, 45694, 97979, 56040, 53639, 20000, 33469, 46582, 5297, 21226, 60783, 60809, 98211, 56272, 87502, 82389, 94142, 60113, 4251, 72123, 58443, 92131, 69245, 14592, 67659, 13122, 22730, 39231, 92705, 80681, 22466, 76285, 42727, 20446, 32325, 96367, 40446, 65795, 59301, 62095, 87021, 20085, 39256, 1584, 92709, 26758, 326, 3203, 3223, 4577, 75326, 61667, 13060, 60924, 92611, 80719, 74046, 31693, 36302, 66751, 28726, 58769, 43036, 71453, 95567, 91714, 84172, 36013, 73861, 59826, 14461, 77234, 96263, 53717, 95170, 88972, 96828, 95496, 8528, 16403, 16425, 206, 78070, 29485, 61130, 87033, 26557, 35176, 35078, 62859, 1928, 63804, 37980, 61316, 51610, 33547, 69382, 35782, 85913, 43243, 11960, 16726, 20477, 8223, 70443, 32000, 13548, 83623, 27496, 22076, 27, 43922, 22282, 94449, 89759, 83413, 81483, 16316, 34941, 32913, 95528, 36869, 96718, 49860, 14538, 48328, 83408, 83920, 462, 85673, 43516, 12423, 2399, 80345, 20646, 89194, 12345, 34194, 72818, 39842, 72622, 89197, 116, 94905, 83646, 89875, 94670, 81481, 22544, 29611, 14395, 34424, 82833, 27465, 84284, 13723, 75793, 84044, 97643, 92607, 69717, 41159, 5030, 88468, 21505, 42029, 77663, 33850, 92575, 66833, 90044, 65198, 56030, 90160, 76455, 56028, 96388, 87477, 37510, 18932, 17088, 68257, 53356, 16273, 95722, 53992, 29996, 87867, 38037, 27640, 80474, 24106, 85151, 1857, 12575, 23008, 43886, 6590, 73211, 36461, 73423, 63255, 18011, 45805, 69768, 10818, 1833, 66156, 98295, 39343, 1440, 15384, 7600, 54796, 48009, 3322, 8788, 78006, 7541, 63177, 21998, 88016, 87284, 23501, 89873, 99859, 46510, 33759, 6449, 36073, 86572, 96224, 99328, 20936, 42029, 85448, 31754, 43862, 51604, 30050, 83206, 53044, 61786, 7158, 24192, 9795, 26833, 49333, 4153, 34374, 12510, 26151, 38742, 99794, 49653, 28615, 16005, 12515, 78726, 38806, 48588, 81651, 35030, 64268, 2587, 77059, 49717, 34341, 20922, 1321, 80743, 20480, 70718, 58881, 43990, 11262, 68677, 87175, 60595, 89182, 21550, 89458, 15334, 60292, 5604, 81339, 5260, 21610, 93854, 83986, 60416, 42442, 65637, 11799, 6710, 84576, 88858, 56427, 35270, 26132, 74101, 16013, 46612, 61171, 91247, 6955, 72433, 76276, 94130, 49381, 65458, 32032, 38839, 80792, 8677, 44443, 62131, 13937, 82405, 72337, 14275, 59174, 14779, 79913, 70973, 37842, 80841, 59831, 10621, 16111, 2316, 1074, 48477, 48928, 62245, 39724, 72235, 51031, 16000, 66366, 412, 81458, 98398, 55603, 78603, 7075, 16398, 57086, 37364, 98804, 45776, 51640, 57978, 76907, 47905, 45303, 14749, 28746, 21486, 41723, 44858, 23802, 42797, 93335, 89083, 21395, 49411, 61318, 72426, 65411, 27684, 89190, 63221, 42435, 61145, 58176, 65862, 77543, 31615, 3227, 76347, 77391, 54867, 50677, 54298, 2772, 95980, 69048, 47870, 17467, 27123, 92728, 41269, 69920, 2415, 46704, 91315, 51826, 8023, 80093, 33589, 35707, 69283, 13163, 94494, 46780, 71339, 60357, 24324, 2954, 63584, 671, 96697, 34803, 67701, 50996, 53927, 63681, 36396, 1797, 97500, 63519, 10878, 55122, 33439, 13293, 1826, 41107, 81472, 9849, 21200, 15061, 61909, 6836, 28224, 72755, 53616, 15916, 33112, 94292, 35222, 13048, 94964, 31920, 64203, 79017, 82916, 18130, 59050, 35664, 36280, 56551, 99183, 47158, 28025, 48974, 76803, 29851, 6433, 58275, 56053, 43986, 89689, 34314, 67174, 34265, 7069, 37142, 50181, 56534, 31435, 1756, 69582, 42751, 33676, 33786, 21768, 32944, 68268, 80818, 68608, 4548, 53721, 84143, 68058, 81746, 49469, 61214, 27950, 55903, 35841, 84003, 99889, 41882, 34669, 67063, 76148, 41738, 20557, 42681, 98272, 51992, 44437, 67855]) . '<br>';
echo minimumDistances([39572,89524,21749,94613,75569,74800,91713,62107,28574,22617,22271,22624,28116,67573,53717,9358,65220,59894,78686,10945,33641,11708,8851,11860,66780,64697,799,47782,41971,54170,8960,81543,60047,47061,92508,51968,38213,84221,14075,66787,23191,52698,5764,51307,20271,59481,77018,1843,19375,55704,12789,53016,83764,37992,64877,50545,19041,82028,98327,61012,52551,7287,42555,12598,70700,51416,80918,8914,35637,11345,75701,58828,80395,97817,26488,17019,57299,3506,18862,93026,75562,48003,62395,59327,85996,27272,9872,5037,25652,8199,82402,78203,31838,41309,7153,18890,92725,88071,27804,28363,99416,19858,3543,79812,17675,30031,96831,91326,49889,15693,84353,25452,80049,46748,84779,66045,90372,94651,87434,16024,19202,69836,94228,67392,27498,1381,86282,20223,5805,14087,48586,5221,50297,68482,85033,67972,98513,98216,59299,48403,30262,60004,73855,10311,6752,74986,92708,13476,85989,96494,29500,5191,82683,40080,88935,10181,57814,75217,30404,63619,5656,95343,68840,55953,63825,70226,23926,62338,68442,99577,27093,15056,59581,17300,25367,82685,92286,34427,96161,78275,30922,25661,99818,13605,82094,88753,23786,39908,80323,54190,3527,85979,65885,72367,41933,29710,58945,82211,8401,43740,81788,35494,58796,57721,69147,516,40406,77785,34943,36567,72413,65865,78580,72231,95822,60674,77337,35960,582,57660,6503,4109,43639,72388,92829,1924,2099,51774,84135,10500,95514,82275,62346,70663,39996,31493,71179,80402,9279,6122,16969,81692,88340,11902,70275,514,72576,47612,36475,73159,21624,42978,93620,65264,15366,86449,67188,17465,54576,67676,44317,50090,49951,6664,20753,89948,54509,8284,86702,80140,14407,20024,78184,19099,31926,48460,19613,4502,12424,72440,94013,34049,15418,87634,99313,30785,90435,82853,64602,45011,50529,25272,11454,481,48288,48559,6781,2797,56844,93483,82938,87603,13507,61122,6702,45433,25934,42667,66288,38359,15108,60301,72408,46878,64287,88073,94015,54723,87278,74970,99734,37808,242,27540,54641,48530,76100,61422,67679,32944,54905,66969,20547,84765,44444,43601,30198,86730,2620,12838,25089,17728,73140,13849,64607,53779,18274,74974,8502,5553,49944,24589,59713,50186,52129,14354,15068,28229,75776,99100,77525,47033,66069,98072,31798,26865,41673,78349,13596,44294,7539,55037,78374,80679,68887,59333,50811,3513,34308,59313,9066,84252,254,85131,50791,52384,99485,82211,96965,91613,81311,74491,38647,63733,88915,86797,90598,46941,65146,20546,7587,72686,75584,85961,69717,60823,61647,36880,64336,12307,96194,89755,12911,12800,74886,63702,65184,90724,45914,78502,82337,43577,52993,20984,7310,41908,24134,97909,88849,5632,18455,96436,94670,10391,98750,80740,71214,60397,17620,51903,89056,30166,41658,1967,42967,32896,65670,8151,23620,27936,86653,5958,71513,55998,43294,78824,14259,67428,93085,19460,73061,27892,15897,84083,54636,30999,64823,25850,7748,82444,77753,96804,12610,35763,98771,55577,68660,80793,80081,92280,8729,83086,14590,96595,55437,57885,91771,69696,41665,1208,89156,31078,29100,21405,15162,83736,52404,79985,25939,60152,78781,3692,73308,7744,39456,72080,63321,24468,69225,59754,33100,94307,42841,47691,90902,98278,21928,82673,84326,63593,83881,73482,11024,29333,94888,42538,29422,63644,38875,71713,40149,17657,75405,13457,25401,31213,1889,5074,72033,71115,64829,5134,65422,24022,52825,72676,22300,91105,71701,6626,54698,55582,96460,82074,1267,7700,24612,47041,71345,63488,18754,11494,97497,10512,41303,39250,58077,59545,44324,30111,47012,25505,35245,28786,49527,4422,1462,88179,95527,73163,11157,66577,45097,7618,48652,62716,31670,89616,9758,3015,69456,28512,30861,83305,39024,88517,22555,97102,48062,83232,43565,95074,8737,78810,23860,74617,99584,25322,62796,95111,14837,90306,61688,59934,14276,26692,22650,45946,32661,48760,48962,2117,77273,96175,1775,32649,84692,24330,46103,32754,23914,89668,44180,49004,84830,84392,23621,84414,9714,2769,95877,40903,93075,73918,17189,7351,16962,56192,53298,49623,4952,18612,68093,98577,31139,69868,47579,15832,10550,93682,64938,34465,99703,25471,83469,885,9863,23442,1652,35930,26211,97529,76833,35639,87799,94023,59342,4762,50215,28992,54385,71519,47604,38830,70097,78744,8698,17676,10928,19249,27710,92218,70066,27413,17689,53535,44651,27553,76977,46303,63483,19540,43832,56668,55179,31632,50691,30874,52746,17258,59866,7131,5130,23823,45962,75227,18919,71012,9255,29847,6613,53317,38417,76679,97083,56107,46566,41734,83660,23543,88037,63495,59436,48221,20163,30967,96205,87207,61841,48951,20817,38060,56083,25947,61883,18397,17526,80802,5761,26781,27001,12375,96451,81770,89054,93534,37877,35621,35268,37889,75516,23305,1384,34952,71526,21548,82272,67732,25107,44113,16683,45924,98525,89118,71872,60408,23867,5750,57562,29629,48884,915,42004,45335,82686,47410,38869,36915,83031,74137,74805,74900,97442,76189,26204,85320,14089,8476,69404,55548,68942,2440,1473,67467,7910,89697,44228,31778,95447,1790,77759,44331,19058,36115,89666,18096,83525,44887,55011,82909,19024,29816,57809,32818,22358,365,34491,52799,8842,3895,8348,94136,22687,26173,61603,30598,15870,5831,78728,27669,23974,56487,88353,59384,92602,94371,77480,92479,39259,32491,91740,58283,78660,65901,91102,1018,66267,25593,70169,91461,45840,78517,85597,68528,4690,47200,99126,36912,69384,94206,64582,93358,50693,52935,52742,59647,47306,46574,68478,86565,95417,60219,44849,74077,26120,52303,91447,8739,94248,61617,200,40088,40134,85797,8616,61177,32998,24094,98089,18734,34652,62671,12092,1697,31958,81186,61344,79265,44112,46175,82182,39529,22746,43383,13607,65218,95686,5054,73958,6286,66671,74158,46375,23158,76308,71343,84335,25658,11790,82424,44392,46442,61448,72836,48140,93406,70374,25836,89023,14486,88363,71206,54015,11109,14589,83974,76328,26628,89029,66638,32914,72052,57148,95641,11562,33456,66985,95897,59114,95127,94674,19858,57921,56122,92694,6061,65880,79420,48250,54904,93906,36613,26110,64274,64075,57051,48248,40403,31,37277,7041,49298,25682,64189,44939,37244,13998,28276,49494,89464,23403,44168,9323,97677,16642,18369,3738,82522,97790,68340]) . '<br>';
echo minimumDistances([1, 2, 1, 3, 4, 5, 2, 9, 1]) . '<br>';
echo minimumDistances([7,1,3,4,1,7]) . '<br>';