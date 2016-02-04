<?php
/**
 * antiHTML<br>
 * 
 * It is an HTML Generator.<br>
 * Supports all HTML5 tags.
 * 
 */

/**
 * Creates an Hyperlink.
 * 
 * @param string $text The link text.
 * @param string $url The URL of the page the link goes to.
 * @param bool $anchor [optional]<br>
 * Set to <b>TRUE</b> if you only want to create an anchor link.
 * @param array $other_attr [optional]<br>
 * The associative key and value of the array represents the attribute's name and it's value respectively. e.g <b>array('id' => 'link', 'target' => '_blank')</b>.
 * @return string A valid HTML link.
 */
function ht_a($text, $url = '', $anchor = FALSE, $other_attr = [])
{
    if (is_bool($anchor) && $anchor === TRUE) {
        $str = "<a id='$url' ";
    } else {
        $str = "<a href='$url' ";
    }

    $numargs = func_num_args();
    if ($numargs == 3 && is_array(func_get_arg(2))) {
        $str .= load_other_attr($anchor);
    } else {
        $str .= load_other_attr($other_attr);
    }

    $str .= ">$text</a>";
    return $str;
}

/**
 * Creates an abbreviation or an acronym, like "Mr.", "Dec.", "ASAP", "ATM".
 * 
 * @param string $text The abbreviated text.
 * @param string $title The full version of the abbreviation/acronym.
 * @param array $other_attr [optional]<br>
 * The associative key and value of the array represents the attribute's name and it's value respectively. e.g <b>array('class' => 'abbr', 'style' => 'color:green;font-weight:bold')</b>.
 * @return string The abbreviated string.
 */
function ht_abbr($text, $title, $other_attr = [])
{
    return "<abbr title='$title' " . load_other_attr($other_attr) . ">$text</abbr>";
}

function ht_address($text, $other_attr = [])
{
    return '<address ' . load_other_attr($other_attr) . ">$text</address>";
}

function ht_area($other_attr = [])
{
    return '<area ' . load_other_attr($other_attr) . '>';
}

function ht_article($text, $other_attr = [])
{
    return '<article ' . load_other_attr($other_attr) . ">$text</article>";
}

function ht_aside($text, $other_attr = [])
{
    return '<aside ' . load_other_attr($other_attr) . ">$text</aside>";
}

function ht_audio($other_attr = [], $err_msg = '')
{
    return '<audio ' . load_other_attr($other_attr) . ">$err_msg</audio>";
}

function ht_b($text, $other_attr = [])
{
    return '<b ' . load_other_attr($other_attr) . ">$text</b>";
}

function ht_base($url, $target, $other_attr = [])
{
    return "<base href='$url' target='$target'" . load_other_attr($other_attr) . '>';
}

function ht_bdi($text, $other_attr = [])
{
    return '<bdi ' . load_other_attr($other_attr) . ">$text</bdi>";
}

function ht_bdo($dir, $text, $other_attr = [])
{
    return "<bdo dir='$dir' " . load_other_attr($other_attr) . ">$text</bdo>";
}

function ht_blockquote($cite, $text, $other_attr = [])
{
    return "<blockquote cite='$cite' " . load_other_attr($other_attr) . ">$text</blockquote>";
}

function ht_body($text, $other_attr = [])
{
    return '<body ' . load_other_attr($other_attr) . ">$text</body>";
}

function ht_br($other_attr = [])
{
    return '<br ' . load_other_attr($other_attr) . '>';
}

function ht_button($text, $type = 'button', $other_attr = [])
{
    return "<button type='$type' " . load_other_attr($other_attr) . ">$text</button>";
}

function ht_canvas($other_attr = [], $err_msg = '')
{
    return '<canvas ' . load_other_attr($other_attr) . ">$err_msg</canvas>";
}

function ht_caption($text, $other_attr = [])
{
    return '<caption ' . load_other_attr($other_attr) . ">$text</caption>";
}

function ht_cite($text, $other_attr = [])
{
    return '<cite ' . load_other_attr($other_attr) . ">$text</cite>";
}

function ht_code($code, $other_attr = [])
{
    return '<code ' . load_other_attr($other_attr) . ">$code</code>";
}

function ht_col($other_attr = [])
{
    return '<col ' . load_other_attr($other_attr) . '>';
}

function ht_colgroup($text, $other_attr = [])
{
    return '<colgroup ' . load_other_attr($other_attr) . ">$text</colgroup>";
}

function ht_datalist($text, $other_attr = [])
{
    return '<datalist ' . load_other_attr($other_attr) . ">$text</datalist>";
}

function ht_dd($text, $other_attr = [])
{
    return '<dd ' . load_other_attr($other_attr) . ">$text</dd>";
}

function ht_del($value, $cite = '', $date_time = '', $other_attr = [])
{
    return "<del cite='$cite' datetime='$date_time' " . load_other_attr($other_attr) . ">$value</del>";
}

function ht_details($text, $other_attr = [])
{
    return '<details ' . load_other_attr($other_attr) . ">$text</details>";
}

function ht_dfn($text, $other_attr = [])
{
    return '<dfn ' . load_other_attr($other_attr) . ">$text</dfn>";
}

function ht_dialog($text, $other_attr = [])
{
    return '<dialog ' . load_other_attr($other_attr) . ">$text</dialog>";
}

function ht_div($text, $other_attr = [])
{
    return '<div ' . load_other_attr($other_attr) . ">$text</div>";
}

function ht_doctype()
{
    return '<!DOCTYPE html>';
}

function ht_dl($text, $other_attr = [])
{
    return '<dl ' . load_other_attr($other_attr) . ">$text</dl>";
}

function ht_dt($text, $other_attr = [])
{
    return '<dt ' . load_other_attr($other_attr) . ">$text</dt>";
}

function ht_em($text, $other_attr = [])
{
    return '<em ' . load_other_attr($other_attr) . ">$text</em>";
}

function ht_embed($src, $other_attr = [])
{
    return "<embed src='$src' " . load_other_attr($other_attr) . '>';
}

function ht_fieldset($text, $other_attr = [])
{
    return '<fieldset ' . load_other_attr($other_attr) . ">$text</fieldset>";
}

function ht_figcaption($text, $other_attr = [])
{
    return '<figcaption ' . load_other_attr($other_attr) . ">$text</figcaption>";
}

function ht_figure($text, $other_attr = [])
{
    return '<figure ' . load_other_attr($other_attr) . ">$text</figure>";
}

function ht_footer($text, $other_attr = [])
{
    return '<footer ' . load_other_attr($other_attr) . ">$text</footer>";
}

function ht_form($text, $other_attr = [])
{
    return '<form ' . load_other_attr($other_attr) . ">$text</form>";
}

function ht_head($text, $other_attr = [])
{
    return '<head ' . load_other_attr($other_attr) . ">$text</head>";
}

function ht_header($text, $other_attr = [])
{
    return '<header ' . load_other_attr($other_attr) . ">$text</header>";
}

function ht_hgroup($text, $other_attr = [])
{
    return '<hgroup ' . load_other_attr($other_attr) . ">$text</hgroup>";
}

function ht_h($level, $text, $other_attr = [])
{
    return "<h$level " . load_other_attr($other_attr) . ">$text</h$level>";
}

function ht_hr($other_attr = [])
{
    return '<hr ' . load_other_attr($other_attr) . '>';
}

function ht_html($text, $other_attr = [])
{
    return '<html ' . load_other_attr($other_attr) . ">$text</html>";
}

function ht_i($text, $other_attr = [])
{
    return '<i ' . load_other_attr($other_attr) . ">$text</i>";
}

function ht_iframe($src, $other_attr = [], $error_msg = '')
{
    return "<iframe src='$src' " . load_other_attr($other_attr) . ">$error_msg</iframe>";
}

function ht_img($src, $other_attr = [])
{
    return "<img src='$src' " . load_other_attr($other_attr) . '>';
}

function ht_input($other_attr = [])
{
    return '<input ' . load_other_attr($other_attr) . '>';
}

function ht_ins($text, $other_attr = [])
{
    return "<ins " . load_other_attr($other_attr) . ">$text</ins>";
}

function ht_kbd($text, $other_attr = [])
{
    return "<kbd " . load_other_attr($other_attr) . ">$text</kbd>";
}

function ht_keygen($name = '', $other_attr = [])
{
    return "<keygen name='$name' " . load_other_attr($other_attr) . '>';
}

function ht_label($text, $other_attr = [])
{
    return '<label ' . load_other_attr($other_attr) . ">$text</label>";
}

function ht_legend($text, $other_attr = [])
{
    return '<legend ' . load_other_attr($other_attr) . ">$text</legend>";
}

function ht_li($text, $other_attr = [])
{
    return '<li ' . load_other_attr($other_attr) . ">$text</li>";
}

function ht_link($href, $rel = 'stylesheet', $type = 'text/css', $other_attr = [])
{
    return "<link rel='$rel' type='$type' href='$href' " . load_other_attr($other_attr) . '>';
}

function ht_main($text, $other_attr = [])
{
    return '<main ' . load_other_attr($other_attr) . ">$text</main>";
}

function ht_map($name, $text, $other_attr = [])
{
    return "<map name='$name' " . load_other_attr($other_attr) . ">$text</map>";
}

function ht_mark($text, $other_attr = [])
{
    return "<mark  " . load_other_attr($other_attr) . ">$text</mark>";
}

function ht_menu($text, $other_attr = [])
{
    return '<menu ' . load_other_attr($other_attr) . ">$text</menu>";
}

function ht_menuitem($other_attr = [])
{
    return '<menuitem ' . load_other_attr($other_attr) . '></menuitem>';
}

function ht_meta($other_attr = [])
{
    return '<meta ' . load_other_attr($other_attr) . '>';
}

function ht_meter($value, $text, $other_attr = [])
{
    return "<meter value='$value' " . load_other_attr($other_attr) . ">$text</meter>";
}

function ht_nav($text, $other_attr = [])
{
    return '<nav ' . load_other_attr($other_attr) . ">$text</nav>";
}

function ht_noscript($text, $other_attr = [])
{
    return '<noscript ' . load_other_attr($other_attr) . ">$text</noscript>";
}

function ht_object($data, $width = '', $height = '', $other_attr = [], $error_msg = '')
{
    return "<object width='$width' height='$height' data='$data' " . load_other_attr($other_attr) . ">$error_msg</object>";
}

function ht_ol($text, $other_attr = [])
{
    return '<ol ' . load_other_attr($other_attr) . ">$text</ol>";
}

function ht_optgroup($text, $label = '', $other_attr = [])
{
    return "<label label='$label' " . load_other_attr($other_attr) . ">$text</label>";
}

function ht_option($text, $value = '', $other_attr = [])
{
    return "<option value='$value' " . load_other_attr($other_attr) . ">$text</option>";
}

function ht_output($name = '', $for = '', $text = '', $other_attr = [])
{
    return "<output name='$name' for='$for' " . load_other_attr($other_attr) . ">$text</output>";
}

function ht_p($text, $other_attr = [])
{
    return '<p ' . load_other_attr($other_attr) . ">$text</p>";
}

function ht_param($name = '', $value = '', $other_attr = [])
{
    return "<meter $name='$name' value='$value' " . load_other_attr($other_attr) . '>';
}

function ht_pre($text, $other_attr = [])
{
    return '<pre ' . load_other_attr($other_attr) . ">$text</pre>";
}

function ht_progress($value, $max, $other_attr = [])
{
    return "<progress value='$value' max='$max' " . load_other_attr($other_attr) . "></progress>";
}

function ht_q($text, $cite = '', $other_attr = [])
{
    return "<q cite='$cite' " . load_other_attr($other_attr) . ">$text</q>";
}

function ht_rp($text, $other_attr = [])
{
    return '<rp ' . load_other_attr($other_attr) . ">$text</rp>";
}

function ht_rt($text, $other_attr = [])
{
    return '<rt ' . load_other_attr($other_attr) . ">$text</rt>";
}

function ht_ruby($text, $other_attr = [])
{
    return '<ruby ' . load_other_attr($other_attr) . ">$text</ruby>";
}

function ht_s($text, $other_attr = [])
{
    return "<s " . load_other_attr($other_attr) . ">$text</s>";
}

function ht_samp($text, $other_attr = [])
{
    return "<samp " . load_other_attr($other_attr) . ">$text</samp>";
}

function ht_script($code = '', $other_attr = [])
{
    return "<script " . load_other_attr($other_attr) . ">$code</script>";
}

function ht_section($text, $other_attr = [])
{
    return '<section ' . load_other_attr($other_attr) . ">$text</section>";
}

function ht_select($text, $other_attr = [])
{
    return '<select ' . load_other_attr($other_attr) . ">$text</select>";
}

function ht_small($text, $other_attr = [])
{
    return "<small " . load_other_attr($other_attr) . ">$text</small>";
}

function ht_source($src, $type, $other_attr = [], $error_msg = '')
{
    return "<source src='$src' type='$type' " . load_other_attr($other_attr) . ">$error_msg</source>";
}

function ht_span($text, $other_attr = [])
{
    return '<span ' . load_other_attr($other_attr) . ">$text</span>";
}

function ht_strong($text, $other_attr = [])
{
    return '<strong ' . load_other_attr($other_attr) . ">$text</strong>";
}

function ht_style($text, $other_attr = [])
{
    return '<style ' . load_other_attr($other_attr) . ">$text</style>";
}

function ht_sub($text, $other_attr = [])
{
    return "<sub " . load_other_attr($other_attr) . ">$text</sub>";
}

function ht_summary($text, $other_attr = [])
{
    return '<summary ' . load_other_attr($other_attr) . ">$text</summary>";
}

function ht_sup($text, $other_attr = [])
{
    return '<sup ' . load_other_attr($other_attr) . ">$text</sup>";
}

function ht_table($text, $other_attr = [])
{
    return '<table ' . load_other_attr($other_attr) . ">$text</table>";
}

function ht_tbody($text, $other_attr = [])
{
    return '<tbody ' . load_other_attr($other_attr) . ">$text</tbody>";
}

function ht_td($text, $other_attr = [])
{
    return '<td ' . load_other_attr($other_attr) . ">$text</td>";
}

function ht_textarea($text, $other_attr = [])
{
    return "<textarea " . load_other_attr($other_attr) . ">$text</textarea>";
}

function ht_tfoot($text, $other_attr = [])
{
    return '<tfoot ' . load_other_attr($other_attr) . ">$text</tfoot>";
}

function ht_th($text, $other_attr = [])
{
    return '<th ' . load_other_attr($other_attr) . ">$text</th>";
}

function ht_thead($text, $other_attr = [])
{
    return '<thead ' . load_other_attr($other_attr) . ">$text</thead>";
}

function ht_time($text, $datetime = '', $other_attr = [])
{
    return "<time datetime='$datetime' " . load_other_attr($other_attr) . ">$text</time>";
}

function ht_title($text, $other_attr = [])
{
    return "<title " . load_other_attr($other_attr) . ">$text</title>";
}

function ht_tr($text, $other_attr = [])
{
    return '<tr ' . load_other_attr($other_attr) . ">$text</tr>";
}

function ht_track($src, $other_attr = [])
{
    return "<track src='$src' " . load_other_attr($other_attr) . '>';
}

function ht_u($text, $other_attr = [])
{
    return '<u ' . load_other_attr($other_attr) . ">$text</u>";
}

function ht_ul($text, $other_attr = [])
{
    return '<ul ' . load_other_attr($other_attr) . ">$text</ul>";
}

function ht_var($text, $other_attr = [])
{
    return '<var ' . load_other_attr($other_attr) . ">$text</var>";
}

function ht_video($src, $other_attr = [], $err_msg = '')
{
    return "<video src='$src' type='video/mp4' controls='controls'" . load_other_attr($other_attr) . ">$err_msg</video>";
}

function ht_wbr($text, $other_attr = [])
{
    return "<wbr " . load_other_attr($other_attr) . ">$text</wbr>";
}


############################################
######            EXTRAS              ######
############################################
function tag_open($tag_name, $class = '', $other_attr = [])
{
    $str = "<$tag_name ";
    if (!empty($class)) {
        $str .= "class='$class' ";
    }
    $str .= load_other_attr($other_attr) . '>';
    return $str;
}

function tag_close($tag_name)
{
    return "</$tag_name>";
}

function load_other_attr($other_attr)
{
    $str = '';
    if (!empty($other_attr)) {
        foreach ($other_attr as $attr => $v) {
            $str .= $attr . "='$v' ";
        }
    }
    return $str;
}

function jquery($code)
{
    $str = tag_open('script');
    $str .= '$(document).ready(function(){';
    $str .= $code;
    $str .= '});';
    $str .= tag_close('script');
    return $str;
}
