<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <div class="svg">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="700px" height="300px" viewBox="250 180 200 200"  xml:space="preserve">
        <path stroke-miterlimit="10" fill="none"class="selected1" d="M261.374,292.551c5.354-13.518,12.673-25.765,19.505-38.324c0.49,0.191,0.696,0.279,0.907,0.354
          c2.247,0.793,2.542,1.55,1.336,3.729c-1.334,2.41-2.794,4.752-4.081,7.187c-3.34,6.315-6.682,12.636-9.887,19.021
          c-1.499,2.984-2.669,6.135-4.02,9.194c-0.761,1.724-2.033,2.8-3.312,2.423c-1.338-0.396-2.793-1.005-3.748-1.966
          c-2.013-2.026-2.899-4.702-3.492-7.489c-1.433-6.736-1.23-13.496-0.434-20.272c0.028-0.237,0.034-0.478,0.03-0.718
          c-0.001-0.063-0.075-0.129-0.173-0.284c-0.207,0.169-0.441,0.299-0.593,0.491c-3.539,4.525-7.127,9.014-10.58,13.604
          c-2.518,3.35-4.839,6.844-7.28,10.251c-0.812,1.134-1.682,2.231-2.603,3.279c-1.204,1.368-2.506,1.297-4.196,0.766
          c-3.555-1.118-4.147-3.95-4.583-6.993c-0.812-5.664,0.034-11.213,1.166-16.74c0.06-0.291,0.09-0.586-0.077-0.975
          c-0.269,0.374-0.566,0.729-0.8,1.124c-2.836,4.771-5.623,9.573-8.503,14.317c-2.598,4.277-5.523,8.299-9.644,11.292
          c-2.69,1.954-5.491,3.671-8.994,3.259c-4.613-0.543-8.541-2.335-10.843-6.656c-0.509-0.955-0.897-0.791-1.482-0.146
          c-1.643,1.81-3.653,3.062-5.959,3.85c-0.974,0.333-1.781,0.043-2.406-0.555c1.603-1.247,3.263-2.397,4.75-3.74
          c1.148-1.035,2.115-2.282,3.083-3.498c0.253-0.317,0.348-0.892,0.286-1.313c-1.389-9.35-1.953-18.756-1.497-28.187
          c0.386-7.979,1.401-15.911,3.131-23.723c0.533-2.407,1.336-4.768,2.177-7.091c1.233-3.412,2.382-6.883,3.981-10.125
          c2.218-4.498,4.819-8.805,7.257-13.194c0.891-1.604,1.708-3.259,2.722-4.781c0.32-0.48,1.179-0.862,1.783-0.85
          c2.854,0.056,3.724,0.263,4.469,3.516c1.68,7.34,1.999,14.791,1.383,22.282c-0.603,7.339-1.904,14.575-3.602,21.727
          c-1.088,4.583-2.585,9.068-3.75,13.635c-1.463,5.732-3.729,11.138-6.613,16.262c-2.032,3.61-4.397,7.036-6.678,10.502
          c-0.591,0.897-0.734,1.733-0.352,2.7c1.006,2.543,2.561,4.605,5.129,5.736c2.93,1.287,5.566,0.345,8.045-1.236
          c5.854-3.735,9.397-9.442,12.834-15.223c3.081-5.182,6.073-10.416,9.205-15.564c1.344-2.211,2.94-4.27,4.428-6.394
          c0.749-1.069,1.657-0.217,2.468-0.136c0.692,0.068,1.165,0.558,0.967,1.364c-0.463,1.889-0.875,3.793-1.429,5.654
          c-1.862,6.262-3.445,12.584-3.158,19.17c0.099,2.273,0.708,4.555,1.334,6.762c0.363,1.28,0.946,1.23,1.735,0.078
          c1.801-2.632,3.518-5.326,5.42-7.883c2.454-3.299,5.095-6.459,7.585-9.73c3.381-4.443,6.701-8.935,10.031-13.418
          c0.471-0.634,0.888-1.316,1.258-2.014c0.795-1.5,1.166-1.599,3.13-1.001c1.375,0.418,1.025,1.431,0.903,2.344
          c-0.518,3.877-1.136,7.742-1.594,11.625c-0.666,5.644-0.475,11.265,0.984,16.776C258.972,288.656,259.687,290.701,261.374,292.551z
           M205.184,203.167c-0.162-0.023-0.324-0.045-0.486-0.068c-0.274,0.366-0.592,0.708-0.816,1.103
          c-2.084,3.676-4.117,7.381-6.231,11.039c-3.408,5.896-5.68,12.26-7.409,18.788c-2.165,8.172-3.212,16.568-3.43,25.001
          c-0.17,6.571,0.278,13.159,0.498,19.737c0.045,1.369,0.294,2.73,0.449,4.096c0.1,0.029,0.2,0.061,0.299,0.092
          c0.283-0.348,0.612-0.667,0.841-1.046c1.2-1.979,2.359-3.979,3.561-5.958c3.852-6.341,6.28-13.258,8.189-20.373
          c1.015-3.779,1.921-7.59,2.799-11.404c1.598-6.94,2.729-13.979,3.165-21.068c0.287-4.673-0.185-9.402-0.468-14.096
          C206.026,207.05,205.516,205.114,205.184,203.167z"/>
        <path class="selected2" d="M240.338,229.357c-1.062-0.023-2.174-1.315-2.135-2.48c0.036-1.053,0.668-1.756,1.569-1.746
          c1.518,0.017,2.641,0.965,2.62,2.211C242.375,228.477,241.453,229.382,240.338,229.357z"/>
        <path class="selected3" d="M314.798,270.881c-1.785,2.78-3.548,5.572-5.358,8.336c-1.901,2.899-3.779,5.817-5.797,8.637
          c-1.342,1.875-3.36,2.922-5.625,3.029c-3.982,0.19-7.834-2.684-8.655-6.938c-0.088-0.456-0.204-0.907-0.361-1.601
          c-0.394,0.36-0.624,0.541-0.816,0.754c-2.119,2.334-4.081,4.84-6.394,6.961c-1.973,1.812-4.395,3.158-7.272,2.779
          c-1.119-0.146-2.217-0.615-3.267-1.07c-0.835-0.362-0.764-1.133-0.452-1.854c0.29-0.668,0.692-0.96,1.507-0.658
          c2.343,0.866,4.201-0.219,6.002-1.587c5.243-3.982,8.904-9.234,11.806-15.018c1.732-3.451,2.923-7.17,4.601-10.652
          c1.117-2.318,2.633-4.45,4.034-6.624c0.572-0.887,1.468-0.542,2.154-0.165c0.679,0.373,1.682,0.716,1.255,1.846
          c-0.617,1.638-1.192,3.308-1.986,4.861c-2.089,4.087-4.514,8.018-6.376,12.2c-1.842,4.139-1.757,8.422,0.909,12.34
          c1.035,1.521,2.343,1.562,4.044,0.494c2.312-1.453,3.882-3.562,5.227-5.835c4.555-7.697,9.585-15.075,14.747-22.371
          c0.829-1.172,1.644-2.356,2.5-3.506c0.375-0.502,0.847-0.933,1.312-1.44c1.115,0.82,3.013,0.576,2.743,2.976
          c0.912-0.985,1.589-1.725,2.273-2.457c1.036-1.105,2.209-1.406,3.673-0.822c1.312,0.523,1.895,1.444,1.75,2.763
          c-0.236,2.212-0.588,4.412-0.887,6.617c-0.68,5.018-1.534,10.018-1.965,15.057c-0.23,2.694,0.425,5.459,1.871,7.823
          c2.499,4.084,5.563,4.825,9.912,2.456c2.563-1.396,4.784-3.434,7.146-5.199c0.242-0.182,0.396-0.479,0.573-0.703
          c-0.066-0.131-0.082-0.235-0.136-0.263c-2.294-1.139-3.024-2.834-2.628-5.469c0.842-5.604,3.498-10.399,6.597-14.987
          c1.359-2.009,2.844-3.947,4.42-5.791c1.74-2.037,3.732-3.15,6.289-2.205c1.623,0.6,2.342,1.642,2.615,3.327
          c0.494,3.047,0.08,5.993-0.488,8.97c-0.771,4.035-1.506,8.082-2.113,12.145c-0.77,5.134-1.272,10.309-2.114,15.429
          c-1.23,7.485-2.562,14.959-4.023,22.402c-2.342,11.908-6.604,23.163-12.008,33.998c-1.444,2.896-3.066,5.688-5.273,8.113
          c-2.458,2.698-5.436,3.547-8.987,3.008c-2.7-0.409-4.811-1.854-6.849-3.476c-3.251-2.586-5.878-5.729-8.011-9.279
          c-0.225-0.374-0.09-0.965-0.123-1.453c0.444,0.058,1.016-0.039,1.307,0.202c0.82,0.684,1.597,1.447,2.264,2.28
          c2.642,3.304,5.672,6.16,9.294,8.365c1.664,1.012,3.355,1.144,5.116,0.196c2.807-1.51,4.467-4.051,6.042-6.659
          c3.757-6.221,6.469-12.925,8.897-19.737c2.184-6.12,4.082-12.336,5.264-18.744c1.04-5.647,2.19-11.28,3.073-16.952
          c0.81-5.205,1.322-10.453,1.974-15.683c0.192-1.569,0.397-3.141,0.6-4.711c-0.107-0.055-0.215-0.11-0.322-0.164
          c-0.282,0.316-0.578,0.623-0.844,0.953c-2.625,3.257-5.029,6.729-7.938,9.71c-2.198,2.253-4.833,4.297-7.64,5.696
          c-5.604,2.794-12.378,0.604-15.413-4.708c-1.973-3.453-2.604-7.245-2.136-11.123c0.628-5.189,1.544-10.344,2.333-15.513
          c0.049-0.325,0.069-0.655,0.103-0.983c-0.126-0.06-0.252-0.12-0.378-0.18c-0.64,0.906-1.381,1.758-1.9,2.728
          c-2.304,4.287-4.575,8.593-6.794,12.923c-1.272,2.481-2.443,5.016-3.616,7.547c-0.401,0.864-0.675,1.791-0.993,2.693
          c-0.479,1.365-1.131,1.645-2.377,1.005c-1.847-0.948-1.844-0.946-1.25-2.878c1.163-3.775,2.322-7.553,3.479-11.33
          c0.067-0.222,0.097-0.456,0.144-0.684C314.983,270.979,314.89,270.932,314.798,270.881z M349.405,277.709
          c0.332,0.646,0.555,1.705,1.022,1.828c0.563,0.148,1.574-0.318,1.975-0.841c1.325-1.729,2.631-3.515,3.641-5.438
          c2.334-4.447,4.523-8.971,6.688-13.503c0.393-0.822,0.479-1.83,0.532-2.762c0.043-0.78-0.43-1.145-1.146-0.582
          c-0.906,0.71-1.908,1.368-2.607,2.255c-1.994,2.532-3.973,5.092-5.739,7.785C351.561,269.816,350.052,273.498,349.405,277.709z"/>
        <path class="selected4" d="M308.141,240.328c-1.392-0.041-2.572-1.315-2.565-2.772c0.003-0.833,0.874-1.631,1.771-1.623
          c1.228,0.011,2.55,1.18,2.537,2.241C309.867,239.381,309.079,240.355,308.141,240.328z"/>
        <path class="selected5" d="M520.707,300.219c0.256-0.361,0.342-0.537,0.479-0.662c0.369-0.34,0.863-0.998,1.121-0.92
          c0.72,0.221,1.479,0.648,1.4,1.643c-0.107,1.395-0.188,2.855-1.539,3.675c-1.447,0.876-4.303-0.312-4.891-2.188
          c-0.726-2.311-1.365-4.691-1.636-7.088c-0.571-5.099-0.26-10.214,0.229-15.312c0.104-1.105,0.176-2.217,0.031-3.467
          c-0.254,0.344-0.525,0.675-0.761,1.031c-1.932,2.977-3.762,6.025-5.807,8.922c-3.75,5.312-8.268,9.933-13.281,14.058
          c-4.104,3.379-8.662,5.276-14.078,3.7c-5.647-1.646-8.854-5.616-10.559-11.082c-1.271-4.073-1.854-8.236-2.068-12.473
          c-0.02-0.377-0.11-0.75-0.221-1.445c-1.504,1.66-2.787,3.109-4.104,4.527c-4.082,4.394-8.257,8.694-13.154,12.199
          c-1.82,1.303-3.721,2.582-6.086,2.575c-4.474-0.015-7.976-1.63-8.765-6.173c-0.063-0.377-0.184-0.745-0.334-1.342
          c-0.705,0.537-1.262,0.959-1.815,1.381c-3.14,2.385-6.396,4.556-10.438,5.023c-5.312,0.613-10.102-0.58-13.571-4.869
          c-2.33-2.875-3.693-6.326-4.49-9.965c-0.117-0.535-0.271-1.062-0.455-1.796c-0.35,0.33-0.576,0.515-0.769,0.729
          c-2.241,2.527-4.381,5.156-6.743,7.566c-2.873,2.928-6.229,3.404-9.888,1.711c-1.805-0.834-3.377-4.154-2.807-6.043
          c0.092-0.302,0.564-0.762,0.748-0.714c0.826,0.214,1.998-0.419,2.404,0.942c0.178,0.596,0.469,1.179,0.807,1.701
          c1.262,1.947,2.598,2.146,4.414,0.725c4.139-3.244,7.41-7.211,10.049-11.756c0.986-1.695,1.549-3.398,1.787-5.355
          c0.711-5.871,1.881-11.663,3.654-17.319c0.143-0.455,0.219-0.932,0.307-1.402c0.021-0.105-0.043-0.226-0.1-0.484
          c-2.131,0.095-4.273,0.177-6.414,0.288c-3.869,0.201-7.738,0.532-11.609,0.566c-1.313,0.012-2.682-0.6-3.938-1.126
          c-0.976-0.407-0.937-1.452,0.02-1.974c0.506-0.277,1.123-0.463,1.697-0.488c6.58-0.289,13.162-0.554,19.744-0.785
          c1.215-0.042,1.873-0.361,2.241-1.709c1.8-6.541,3.937-12.986,5.002-19.721c0.265-1.663,1.005-3.276,1.699-4.832
          c0.269-0.595,1.004-1.32,1.572-1.363c1.068-0.081,2.191,0.144,2.957,1.193c2.148,2.945,2.67,6.375,2.953,9.851
          c0.422,5.146-0.773,10.07-2.297,14.928c-0.365,1.168-0.291,1.276,0.93,1.251c4.707-0.098,9.414-0.177,14.119-0.214
          c0.567-0.005,1.154,0.248,1.697,0.464c0.272,0.109,0.477,0.404,0.711,0.615c-0.24,0.225-0.441,0.534-0.726,0.66
          c-2.305,1.027-4.778,1.256-7.252,1.396c-3.422,0.193-6.848,0.319-10.271,0.426c-0.912,0.028-1.207,0.611-1.523,1.28
          c-1.797,3.79-3.527,7.613-5.434,11.347c-1.578,3.089-3.328,6.092-5.076,9.091c-1.019,1.744-1.541,3.501-1.322,5.574
          c0.453,4.315,1.488,8.382,3.971,12.026c3.238,4.767,7.955,5.636,12.947,3.527c3.396-1.435,6.021-4.006,8.887-6.229
          c1.429-1.106,1.933-2.442,2.205-4.129c0.98-6.072,3.088-11.8,5.646-17.365c1.234-2.684,2.389-5.423,3.877-7.963
          c1.486-2.537,3.242-4.939,5.086-7.234c0.873-1.086,2.172-1.874,3.381-2.632c1.334-0.836,2.803-0.458,3.978,0.312
          c1.407,0.923,1.719,2.605,1.424,4.09c-0.604,3.041-1.289,6.1-2.332,9.011c-2.234,6.23-6.01,11.618-9.976,16.838
          c-2.311,3.043-4.92,5.858-7.313,8.842c-0.476,0.591-0.887,1.509-0.805,2.215c0.184,1.561,0.487,3.178,1.135,4.596
          c0.799,1.76,2.026,2.235,3.738,1.377c2.479-1.244,5.018-2.548,7.135-4.304c3.217-2.669,6.172-5.672,9.092-8.676
          c2.441-2.515,4.625-5.277,7.016-7.843c1.472-1.577,1.265-3.562,1.541-5.4c0.855-5.638,1.548-11.301,2.359-16.945
          c0.188-1.297,0.559-2.575,0.924-3.839c0.438-1.516,0.486-1.511,2.248-1.071c1.183,0.296,1.59,0.939,1.357,2.106
          c-0.562,2.816-1.188,5.621-1.652,8.453c-0.463,2.836-0.768,5.698-1.127,8.55c-0.039,0.299,0.024,0.609,0.061,1.251
          c0.853-0.933,1.558-1.608,2.15-2.371c3.246-4.148,6.479-8.305,9.682-12.487c0.873-1.14,1.604-2.388,2.429-3.566
          c0.535-0.767,1.985-0.894,3.002-0.212c0.828,0.556,0.963,1.41,0.422,2.2c-1.576,2.3-3.141,4.617-4.855,6.811
          c-3.641,4.652-7.135,9.458-11.166,13.753c-2.367,2.523-2.895,5.068-2.69,8.225c0.301,4.721,0.739,9.396,2.502,13.843
          c1,2.522,2.387,4.763,4.518,6.524c2.314,1.918,5.826,2.002,9.263,0.235c3.502-1.801,6.301-4.476,9.122-7.127
          c4.005-3.765,7.438-8.031,10.384-12.638c2.487-3.889,4.537-8.057,6.866-12.049c3.23-5.539,3.898-11.868,5.65-17.861
          c1.668-5.709,3.215-11.453,4.912-17.153c0.557-1.866,1.395-3.649,2.145-5.453c0.318-0.762,0.781-1.011,1.705-0.649
          c2.045,0.801,2.548,1.335,2.166,3.638c-0.692,4.191-1.51,8.411-2.819,12.441c-2.138,6.563-4.894,12.925-7.023,19.489
          c-1.088,3.35-1.576,6.934-1.992,10.452c-0.562,4.755-0.885,9.542-1.139,14.325c-0.217,4.113-0.08,8.229,1.066,12.239
          C520.418,299.584,520.527,299.787,520.707,300.219z M456.686,249.827c-0.512,0.324-0.862,0.445-1.062,0.69
          c-1.629,2-3.514,3.863-4.779,6.077c-2.291,4.008-4.344,8.169-6.233,12.384c-1.302,2.899-2.177,5.992-3.203,9.013
          c-0.215,0.633-0.271,1.321-0.398,1.983c0.215,0.158,0.433,0.316,0.646,0.476c0.188-0.404,0.313-0.853,0.571-1.204
          c0.984-1.352,2.048-2.646,3.019-4.007c4.174-5.849,8.279-11.737,10.512-18.678C456.422,254.478,457.061,252.388,456.686,249.827z
           M421.141,225.053c-0.164,0.021-0.325,0.039-0.489,0.059c-1.931,7.114-3.857,14.227-5.812,21.438c1.279,0,2.502,0.041,3.717-0.035
          c0.236-0.015,0.533-0.446,0.65-0.744c0.465-1.187,0.93-2.38,1.289-3.602c1.248-4.241,2.127-8.539,1.524-12.991
          C421.832,227.789,421.439,226.428,421.141,225.053z M410.176,263.777c0.107,0.037,0.215,0.076,0.322,0.115
          c2.506-4.371,4.688-8.898,6.859-13.75c-0.978,0.047-1.607,0.144-2.229,0.093c-1.379-0.112-1.842,0.686-2.127,1.851
          c-0.537,2.208-1.191,4.388-1.734,6.595C410.854,260.368,410.537,262.078,410.176,263.777z"/>
        <path class="selected6"d="M522.873,264.191c0.379-1.237,0.969-1.976,2.34-2.058c4.453-0.268,8.9-0.66,13.354-0.947
          c1.215-0.079,2.442,0.056,3.668,0.067c0.713,0.007,1.272,0.331,1.153,1.027c-0.086,0.492-0.526,1.081-0.977,1.323
          c-2.092,1.132-4.422,1.234-6.734,1.347c-3.309,0.157-6.614,0.412-9.922,0.407C524.801,265.355,523.848,264.607,522.873,264.191z"/>
      </svg>
      </a>
    </div>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

