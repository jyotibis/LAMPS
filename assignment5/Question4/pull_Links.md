

document.getElementsByTagName('a') function is used to extract all the links from a webpage. Since tag is used for creation of links so we can extract using the tag name as a reference.

Below is the example given which shows the extraction of links from a webpage (FACEBOOK login page) :

links = document.getElementsByTagName('a') HTMLCollection(55) [a#u_0_a_uH._42ft._4jy0._55pi._2agf._4o_4._63xb._p._4jy3._517h._51sy, a#u_0_c_lg._42ft._4jy0._55pi._2agf._4o_4._3_s2._63xb._p._4jy3._4jy1.selected._51sy, a#u_0_e_JQ._1gbd, a#u_0_5_xX._42ft._2d4g._2d4j._t7b, a#u_0_4_Tq.layer_close_elem.accessible_elem, a#u_0_g_qh._1gbd._1gbe, a, a, a#u_0_2_6b._42ft._4jy0._6lti._4jy6._4jy2.selected._51sy, a._8esh, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._42ft._4jy0._517i._517h._51sy, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a._41ug, a, a, a.accessible_elem, a.accessible_elem, u_0_a_uH: a#u_0_a_uH._42ft._4jy0._55pi._2agf._4o_4._63xb._p._4jy3._517h._51sy, u_0_c_lg: a#u_0_c_lg._42ft._4jy0._55pi._2agf._4o_4._3_s2._63xb._p._4jy3._4jy1.selected._51sy, u_0_e_JQ: a#u_0_e_JQ._1gbd, u_0_5_xX: a#u_0_5_xX._42ft._2d4g._2d4j._t7b, u_0_4_Tq: a#u_0_4_Tq.layer_close_elem.accessible_elem, …]

links.length 55

links[0] < a role="menuitem" class="_42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy" href="#" style="max-width:200px;" aria-haspopup="true" aria-expanded="false" rel="toggle" id="u_0_a_uH">< span class="_55pe">Sections of this page</>< span class="_4o_3 _3-99">< i class="img sp_DPyXVliY-x6 sx_19ceca"></></></>

links[4] < a aria-label="Close" class="layerclose_elem accessible_elem" href="#" role="button" id="u_0_4_Tq" aria-labelledby="u_0_4_Tq u_0_3/G" tabindex="-1"></>

// To print all links use for loop

for(i=0; i<links.length; i++){ console.log(links[i]); } <a aria-label=​"Close" class=​"layerclose_elem accessible_elem" href=​"#" role=​"button" id=​"u_0_4_Tq" aria-labelledby=​"u_0_4_Tq u_0_3/​G" tabindex=​"-1">​​ for(i=0; i<links.length; i++){ console.log(links[i]); } VM920:2 <a role=​"menuitem" class=​"42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy" href=​"#" style=​"max-width:​200px;​" aria-haspopup=​"true" aria-expanded=​"false" rel=​"toggle" id=​"u_0_a_uH">​…​​ VM920:2 <a role=​"menuitem" class=​"_42ft _4jy0 _55pi _2agf _4o_4 _3_s2 _63xb _p _4jy3 _4jy1 selected _51sy" href=​"#" style=​"max-width:​200px;​" aria-haspopup=​"true" tabindex=​"-1" aria-expanded=​"false" rel=​"toggle" id=​"u_0_c_lg">​…​​ VM920:2 <a href=​"/​login/​?cuid=AYjOqPLtKWeuzTvvNkwkY2dAyZWIlhNt6-Gp5_8Y_q1DIQv933LG9a8SHc3F…lvbl90aW1lIjoxNjE0Nzg2MDIxLCJjYWxsc2l0ZV9pZCI6MzQzNjE1NzkwMjAxNjQ0fQ%3D%3D" title=​"Akash Rawat" class=​"_1gbd" id=​"u_0_e_JQ">​…​​ VM920:2 <a role=​"button" class=​"_42ft _2d4g _2d4j _t7b" ajaxify=​"/​login/​device-based/​async/​remove/​?cuid=AYhegyPhYaIoBeaYg9vkvi0wuZiMygSTi8eiUFPyhwRSnuT9DwgA-uWGz7INJ8cksxlAbTRJ4b46iYnCgcDEA1SaUida-FA0hFauTnxRtue3MFT1G650QsKXiicuAlu9k3ZSZcYZfYbMjDyhqDbOqkmMO9YbPVOgVQRUyDLFuQ5g&flow=www_dbl_selector_remove" href=​"#" rel=​"async-post" id=​"u_0_5_xX" aria-describedby=​"u_0_4_Tq" aria-owns=​"js_0">​…​​ VM920:2 <a aria-label=​"Close" class=​"layer_close_elem accessible_elem" href=​"#" role=​"button" id=​"u_0_4_Tq" aria-labelledby=​"u_0_4_Tq u_0_3/​G" tabindex=​"-1">​​ VM920:2 <a class=​"_1gbd _1gbe" href=​"/​login/​?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjE0Nzg2MDIxLCJjYWxsc2l0ZV9pZCI6MTMzMjk3MjM4NzAzNDMzN30%3D" id=​"u_0_g_qh">​…​​ .....SIMILARLY ALL LINKS WILL BE PRINTED

