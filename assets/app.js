/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/all.css';
import './styles/app.css';
import './styles/materialize.min.css'
import './styles/helper/sidebar.css';

// any JS you import will output into a single js file


import './js/lib/settings.js';
import './js/lib/sidebar.js';
import './js/scripts.js';

// start the Stimulus application
import './bootstrap';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';


// create global $ and jQuery variables
 global.$ = global.jQuery = $;