


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Title:  .
-----------------------2018-03-05[Mar-Mon]17-42PM


CREATE or replace VIEW `vw_eam_assets` AS select *, concat(`Asset`, ', ' ,`Description`, ', ' , `Department`, ', Col:', `Location`) as asset_title from lukup.asset_eam

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Title:  .
-----------------------2018-03-04


CREATE or replace VIEW `vw_eam_assets` AS select *, concat(`Asset`, ', ' ,`Description`, ', ' , `Department`, ', Col:', `Location`) as asset_title from lukup_pub.vw_asset_eam_lp

_____________



select `vw_asset_eam_lp`.`id` AS `id`,`vw_asset_eam_lp`.`Asset` AS `Asset`,`vw_asset_eam_lp`.`Description` AS `Description`,`vw_asset_eam_lp`.`Location` AS `Location`,`vw_asset_eam_lp`.`Manufacturer` AS `Manufacturer`,`vw_asset_eam_lp`.`Model` AS `Model`,`vw_asset_eam_lp`.`Serial Number` AS `Serial Number`,`vw_asset_eam_lp`.`Supplier` AS `Supplier`,`vw_asset_eam_lp`.`Category` AS `Category`,`vw_asset_eam_lp`.`Cell` AS `Cell`,`vw_asset_eam_lp`.`Change Notice` AS `Change Notice`,`vw_asset_eam_lp`.`Class` AS `Class`,`vw_asset_eam_lp`.`Commission Date` AS `Commission Date`,`vw_asset_eam_lp`.`Contract Equipment` AS `Contract Equipment`,`vw_asset_eam_lp`.`Criticality` AS `Criticality`,`vw_asset_eam_lp`.`Currency` AS `Currency`,`vw_asset_eam_lp`.`Customer` AS `Customer`,`vw_asset_eam_lp`.`Department` AS `Department`,`vw_asset_eam_lp`.`Dependent` AS `Dependent`,`vw_asset_eam_lp`.`Dormant End` AS `Dormant End`,`vw_asset_eam_lp`.`Dormant Start` AS `Dormant Start`,`vw_asset_eam_lp`.`Eligible for Energy Star Label` AS `Eligible for Energy Star Label`,`vw_asset_eam_lp`.`Latest Install Date` AS `Latest Install Date`,`vw_asset_eam_lp`.`Latest Receipt Date` AS `Latest Receipt Date`,`vw_asset_eam_lp`.`Lock Reliability Ranking Values` AS `Lock Reliability Ranking Values`,`vw_asset_eam_lp`.`Organization` AS `Organization`,`vw_asset_eam_lp`.`Original Install Date` AS `Original Install Date`,`vw_asset_eam_lp`.`Original Receipt Date` AS `Original Receipt Date`,`vw_asset_eam_lp`.`Out of Service` AS `Out of Service`,`vw_asset_eam_lp`.`Parent Asset` AS `Parent Asset`,`vw_asset_eam_lp`.`Prevent non-PM WO Completion` AS `Prevent non-PM WO Completion`,`vw_asset_eam_lp`.`Primary Use` AS `Primary Use`,concat(`vw_asset_eam_lp`.`Asset`,', ',`vw_asset_eam_lp`.`Description`,', ',`vw_asset_eam_lp`.`Department`,', Col:',`vw_asset_eam_lp`.`Location`) AS `asset_title` from `lukup_pub`.`vw_asset_eam_lp`


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

 
 
2018-03-05:

from cilist..

select concat(`lukup`.`asset_eam`.`Asset`,' _ ',`lukup`.`asset_eam`.`Description`) AS `AssetDescr`,`lukup`.`asset_eam`.`id` AS `id`,`lukup`.`asset_eam`.`Asset` AS `Asset`,`lukup`.`asset_eam`.`Description` AS `Description`,`lukup`.`asset_eam`.`Location` AS `Location`,`lukup`.`asset_eam`.`Manufacturer` AS `Manufacturer`,`lukup`.`asset_eam`.`Model` AS `Model`,`lukup`.`asset_eam`.`Serial Number` AS `Serial Number`,`lukup`.`asset_eam`.`Supplier` AS `Supplier`,`lukup`.`asset_eam`.`Category` AS `Category`,`lukup`.`asset_eam`.`Cell` AS `Cell`,`lukup`.`asset_eam`.`Change Notice` AS `Change Notice`,`lukup`.`asset_eam`.`Class` AS `Class`,`lukup`.`asset_eam`.`Commission Date` AS `Commission Date`,`lukup`.`asset_eam`.`Contract Equipment` AS `Contract Equipment`,`lukup`.`asset_eam`.`Criticality` AS `Criticality`,`lukup`.`asset_eam`.`Currency` AS `Currency`,`lukup`.`asset_eam`.`Customer` AS `Customer`,`lukup`.`asset_eam`.`Department` AS `Department`,`lukup`.`asset_eam`.`Dependent` AS `Dependent`,`lukup`.`asset_eam`.`Dormant End` AS `Dormant End`,`lukup`.`asset_eam`.`Dormant Start` AS `Dormant Start`,`lukup`.`asset_eam`.`Eligible for Energy Star Label` AS `Eligible for Energy Star Label`,`lukup`.`asset_eam`.`Latest Install Date` AS `Latest Install Date`,`lukup`.`asset_eam`.`Latest Receipt Date` AS `Latest Receipt Date`,`lukup`.`asset_eam`.`Lock Reliability Ranking Values` AS `Lock Reliability Ranking Values`,`lukup`.`asset_eam`.`Organization` AS `Organization`,`lukup`.`asset_eam`.`Original Install Date` AS `Original Install Date`,`lukup`.`asset_eam`.`Original Receipt Date` AS `Original Receipt Date`,`lukup`.`asset_eam`.`Out of Service` AS `Out of Service`,`lukup`.`asset_eam`.`PO# / IPP#` AS `PO# / IPP#`,`lukup`.`asset_eam`.`Parent Asset` AS `Parent Asset`,`lukup`.`asset_eam`.`Prevent non-PM WO Completion` AS `Prevent non-PM WO Completion`,`lukup`.`asset_eam`.`Primary Use` AS `Primary Use` from `lukup`.`asset_eam`

