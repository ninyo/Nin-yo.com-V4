<?
$headtitle = 'main';//should be placed before loader

@include('_library/link/php/loader.php');

?>

<? 
// $display = $array_controller['landing_page']['switch_display'];
// $status = $array_controller['landing_page']['switch_status'];

/* ————————————————————————————————————————————————————————— 
ECHO CLIPBOARD BELOW
————————————————————————————————————————————————————————— */

echo $_header_main;
echo $_section_portfolio_grid;
// echo $_section_showmore;
echo $_section_about;
echo $_section_footer;

?>

<?
@include('_library/link/php/footer.php');
?>