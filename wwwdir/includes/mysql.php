<?php
 class ipTV_db { public $result; var $last_query; protected $dbuser; protected $dbpassword; protected $dbname; protected $dbhost; public $dbh; protected $pconnect = false; protected $connected = false; function __construct($e52446c69000e32dcba3587971751c55, $fe0e191d9679e3b25f12894b8643f8dc, $b4096134eae1a66dde5826015002e9e8, $e81fa4916966385db57a281e4350f3af, $Bbd935a3f7113263ed95731f6a48e3a4 = 7999, $f27e9801e97df9300aad11d5c40edeeb = false, $f828fbd7943068a1cd53cba5fe86120c = false) { goto A837a1c446ff4fd60acbe430be3300d0; a77eeef926a8c1f54746708636e45f23: $this->dbname = $b4096134eae1a66dde5826015002e9e8; goto ea9e61862695a95bf4df269e1ee245cc; A837a1c446ff4fd60acbe430be3300d0: $this->dbh = false; goto Da52e954fa780d699cc16d2a82ab3cce; B6e510b083278924e7fe6e0c44d021ab: e13de7cdcb920c2abf50d5cbc49ba564: goto Ab453ba526a81df5f0e04af23eb4bed1; Fe9f36a9faa3c8d4b07285f7c739480a: $this->dbuser = $e52446c69000e32dcba3587971751c55; goto f83a3915bcf84bfac1b9af80270e06bf; Da52e954fa780d699cc16d2a82ab3cce: if ($f828fbd7943068a1cd53cba5fe86120c) { goto e13de7cdcb920c2abf50d5cbc49ba564; } goto Fe9f36a9faa3c8d4b07285f7c739480a; a3f03ecf7c7b0bd6b21675a2648d9eef: $this->dbport = $Bbd935a3f7113263ed95731f6a48e3a4; goto B6e510b083278924e7fe6e0c44d021ab; B8dc72864d3e1328d6025d56f55cc15a: $this->pconnect = $f27e9801e97df9300aad11d5c40edeeb; goto a3f03ecf7c7b0bd6b21675a2648d9eef; f83a3915bcf84bfac1b9af80270e06bf: $this->dbpassword = $fe0e191d9679e3b25f12894b8643f8dc; goto a77eeef926a8c1f54746708636e45f23; ea9e61862695a95bf4df269e1ee245cc: $this->dbhost = $e81fa4916966385db57a281e4350f3af; goto B8dc72864d3e1328d6025d56f55cc15a; Ab453ba526a81df5f0e04af23eb4bed1: } function Ca531F7bdc43b966dEFB4ABA3C8fAf22() { goto e58a7b364587af25f2c53704499c7eb2; f35202f775e1a1942028b58a2138fe6b: $this->dbh->close(); goto d3ddee84f0723888728660f2394cc4b3; d3ddee84f0723888728660f2394cc4b3: d73ba8e709ebbde617732fce29c1c938: goto C3c889bcfd7c8b9be4d749707e212d0e; e58a7b364587af25f2c53704499c7eb2: if (!($this->connected && !$this->pconnect)) { goto d73ba8e709ebbde617732fce29c1c938; } goto d949a86e3ae30e3aeca9f4394cff1025; C3c889bcfd7c8b9be4d749707e212d0e: return true; goto cf3bb37fac8f580e5dc98e5bef967ca2; d949a86e3ae30e3aeca9f4394cff1025: $this->connected = false; goto f35202f775e1a1942028b58a2138fe6b; cf3bb37fac8f580e5dc98e5bef967ca2: } function __destruct() { $this->Ca531F7bDC43B966DEFB4aba3c8faf22(); } function cC637bCB0b74B82bEbc2776607e73BED() { goto A07540df876e15c76e669d27d5136fe6; f120a76d5529220a65515a1503d0f407: $this->dbh->options(MYSQLI_OPT_CONNECT_TIMEOUT, 4); goto Cd25a904fff718a30637b344d5d1709c; fc98ddb734dd6642c38ce1a8fcd1b2db: E0536db2db1def6584fd7cd3ae7598d7: goto B4973624135a9e81c2d02df3d3a994b8; a03f1a3fe32e2ee2b10e41f7321d6750: die(json_encode(array("\x65\x72\x72\157\162" => "\x4d\x79\x53\121\x4c\x3a\x20" . $this->dbh->error))); goto Da28b0747fff32dcdc5fd2a7ca3636ad; C7ee4cb5c028b65dfbffa6737d9d94ab: return true; goto ffe92f5169e0a14545ba76f2d8273c8f; ac5a0686feae143e989701658a739957: return true; goto D40784a6ab084677073fc35342721cef; B4973624135a9e81c2d02df3d3a994b8: if (empty($this->dbh->error)) { goto Efe1a96755932f3e8a8289a979662ac7; } goto a03f1a3fe32e2ee2b10e41f7321d6750; A14df45d719226add5b6fa260f1f9485: $this->dbh = mysqli_init(); goto f120a76d5529220a65515a1503d0f407; B137f27660162a390f3964c615d423f9: $this->dbh->real_connect("\x70\x3a" . $this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname, $this->dbport); goto fc98ddb734dd6642c38ce1a8fcd1b2db; d8b682ac2587ca021ef9c82cddda80ae: mysqli_set_charset($this->dbh, "\165\164\146\70"); goto ac5a0686feae143e989701658a739957; ffe92f5169e0a14545ba76f2d8273c8f: De8020478cedf0490a04c83857466507: goto A14df45d719226add5b6fa260f1f9485; A07540df876e15c76e669d27d5136fe6: if (!($this->connected && $this->dbh)) { goto De8020478cedf0490a04c83857466507; } goto C7ee4cb5c028b65dfbffa6737d9d94ab; Cd25a904fff718a30637b344d5d1709c: if ($this->pconnect) { goto c6879f81d479f134044f227d7bd8448b; } goto Af0bd0a578077985648e9fcff31ba610; e1658c2570a6ad4ccac24a5effd68497: goto E0536db2db1def6584fd7cd3ae7598d7; goto afdeddb5756095bc1de3e1bc7b2ea127; Af0bd0a578077985648e9fcff31ba610: $this->dbh->real_connect($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname, $this->dbport); goto e1658c2570a6ad4ccac24a5effd68497; Da28b0747fff32dcdc5fd2a7ca3636ad: Efe1a96755932f3e8a8289a979662ac7: goto E90aaf92f3bb9e512da009fb641f9085; E90aaf92f3bb9e512da009fb641f9085: $this->connected = true; goto d8b682ac2587ca021ef9c82cddda80ae; afdeddb5756095bc1de3e1bc7b2ea127: c6879f81d479f134044f227d7bd8448b: goto B137f27660162a390f3964c615d423f9; D40784a6ab084677073fc35342721cef: } function query($b0f1eb357ed72245e03dfe6268912497, $B0fb8cd24a354bd4e2e52cfd27accdb1 = false) { goto A311f43f913f18fdfde2ef6108575ec9; ebaa6660aff1f6f6d740cad377ddf26d: $bcde8f5075cc50fc02f07923570c4006 = func_get_args(); goto f26fef781f5d6cf977c547fb6f1c281e; Da1263ee16e2077424329944d190abfc: b98b73da316b1cb484ae8ac5489e2edf: goto Cb372a418e6917966088b32a43d54fd1; f26fef781f5d6cf977c547fb6f1c281e: $e3d665ac9d68febd9e8a2fa23a73999a = array(); goto C9c4971aee88cfa50af0391a5ca9a9b2; D3dc9c5c9afd5acacf9b05aad712b462: if (!($C48e0083a9caa391609a3c645a2ec889 < $bf71d30c152dd2edcc2dbd2d67b71257)) { goto b98b73da316b1cb484ae8ac5489e2edf; } goto D1715209170fa033acd73b64845f5f0f; bec37757dca6c2ad520ebb6915996abe: $C48e0083a9caa391609a3c645a2ec889++; goto Ae97b10323c432da527fd3276c6400e6; fc5f5506019322603fb221028f75bead: return false; goto D24a92181d6585f70cf34db204c114f8; ac6ea83512a5e42fe73df20c1880e672: a78Bf8D35765bE2408c50712CE7A43aD::E501281aD19Af8A4bBbf9BEd91ee9299("\115\x79\x53\121\114\x20\121\165\x65\x72\171\40\x46\141\151\154\x65\144\40\x5b" . $b0f1eb357ed72245e03dfe6268912497 . "\135\72\40" . mysqli_error($this->dbh)); goto fc5f5506019322603fb221028f75bead; Ae97b10323c432da527fd3276c6400e6: goto A527e2e94fe176728f169d39a4a4d85e; goto Da1263ee16e2077424329944d190abfc; A04aeb22555bf7f67ed19d5566171b7e: $this->result = mysqli_query($this->dbh, $b0f1eb357ed72245e03dfe6268912497); goto B0eadcfd071cf480c4dc10718ff99db4; C9c4971aee88cfa50af0391a5ca9a9b2: $C48e0083a9caa391609a3c645a2ec889 = 1; goto d6af365f6ec10ea18132ce4d4c4883ed; F4820d5d97698b8c55e96b0111fc0928: F4e55a76a7bf5ad6a6019122ba1e684e: goto A621dfc12d7e258094cab8182b7a25ed; b3c814d9a9c8c75b31bf0d7b00836252: f452239965e80b481e977d516a53b7c6: goto f46e4aa3990cc26945963c85f87debdc; D1715209170fa033acd73b64845f5f0f: $e3d665ac9d68febd9e8a2fa23a73999a[] = mysqli_real_escape_string($this->dbh, $bcde8f5075cc50fc02f07923570c4006[$C48e0083a9caa391609a3c645a2ec889]); goto f78c7fa72414e93bb55e9ee55ee9e50d; f78c7fa72414e93bb55e9ee55ee9e50d: df5f037276d45bf66bdacb05245e1b06: goto bec37757dca6c2ad520ebb6915996abe; D24a92181d6585f70cf34db204c114f8: d90ef07d9df786f5e8aafef2dcaf94cf: goto e6cd45fe255392aeefeb9d458331c6af; B0eadcfd071cf480c4dc10718ff99db4: goto f452239965e80b481e977d516a53b7c6; goto F4820d5d97698b8c55e96b0111fc0928; f46e4aa3990cc26945963c85f87debdc: if ($this->result) { goto d90ef07d9df786f5e8aafef2dcaf94cf; } goto ac6ea83512a5e42fe73df20c1880e672; E515e9916f20e6026dd4a7eea78da35c: if ($B0fb8cd24a354bd4e2e52cfd27accdb1 === true) { goto F4e55a76a7bf5ad6a6019122ba1e684e; } goto A04aeb22555bf7f67ed19d5566171b7e; B14513eed3984a792e82d9b6060ed026: $bf71d30c152dd2edcc2dbd2d67b71257 = func_num_args(); goto ebaa6660aff1f6f6d740cad377ddf26d; A311f43f913f18fdfde2ef6108575ec9: $this->CC637bcB0b74B82bEBc2776607e73beD(); goto B14513eed3984a792e82d9b6060ed026; Cb372a418e6917966088b32a43d54fd1: $b0f1eb357ed72245e03dfe6268912497 = vsprintf($b0f1eb357ed72245e03dfe6268912497, $e3d665ac9d68febd9e8a2fa23a73999a); goto b6dd48214535fde76acc73824ffde459; e6cd45fe255392aeefeb9d458331c6af: return true; goto c40cfdfaf3de798bb5307bfbff57f065; b6dd48214535fde76acc73824ffde459: $this->last_query = $b0f1eb357ed72245e03dfe6268912497; goto E515e9916f20e6026dd4a7eea78da35c; d6af365f6ec10ea18132ce4d4c4883ed: A527e2e94fe176728f169d39a4a4d85e: goto D3dc9c5c9afd5acacf9b05aad712b462; A621dfc12d7e258094cab8182b7a25ed: $this->result = mysqli_query($this->dbh, $b0f1eb357ed72245e03dfe6268912497, MYSQLI_USE_RESULT); goto b3c814d9a9c8c75b31bf0d7b00836252; c40cfdfaf3de798bb5307bfbff57f065: } function c126fd559932F625CDf6098D86C63880($E4cee08fb30dc4181fe8797c6d497854 = false, $Ba405126142f0dfc9dbf39063b8e03f0 = '', $b1894fdfe80bfade7e52d132deb86670 = true, $e5da5890532f44eaec7109ff806fa870 = '') { goto E2bc740175462d73afb9e35662d79f9b; a2284e377f131c6d1bee36a9a761c574: if (!empty($e5da5890532f44eaec7109ff806fa870) && array_key_exists($e5da5890532f44eaec7109ff806fa870, $c72d66b481d02f854f0bef67db92a547)) { goto cd24d6ea8374bcfc3d627dd670829176; } goto Ea1ce61960946c024a456a6df8d5ad38; D585d9fc6d16202f0d912a47097e7740: A9e286b3e3983352f9ff5becbec84ed8: goto Ee2914841c226a8e9539025ece62021b; Af16dfc318a2fa3b3aed50a60fc42d17: goto eff792a8c21925a70519463fc81f638e; goto Fb74fceaff2dfebeedd514fdab459d95; E2bc740175462d73afb9e35662d79f9b: if (!($this->dbh && $this->result)) { goto bef503f92e4028d0083cc3a56d4e70fb; } goto Db3ba32ba92c9e90a47a251b90f6a6ba; fddc7cee5cd337aaffbadbc209f87076: if ($E4cee08fb30dc4181fe8797c6d497854 && array_key_exists($Ba405126142f0dfc9dbf39063b8e03f0, $c72d66b481d02f854f0bef67db92a547)) { goto d39da7a1b2fdb19c8ff6a84daea860d1; } goto ab3463b3cc2d9508a7fbe0181d48b697; Cf9a73782a5e2fce3e34dd54b487f50f: $Cd4eabf7ecf553f46c17f0bd5a382c46[$c72d66b481d02f854f0bef67db92a547[$Ba405126142f0dfc9dbf39063b8e03f0]][$c72d66b481d02f854f0bef67db92a547[$e5da5890532f44eaec7109ff806fa870]] = $c72d66b481d02f854f0bef67db92a547; goto F517e50d68da24a50f3e983ffd421213; ab5d0cdaa73f638e8a6a329b44a2b002: if (!$b1894fdfe80bfade7e52d132deb86670) { goto Cff2266e2d1c4c805ad6a523959be10a; } goto d0f586fb2f18de4f63d7eac6b82d3751; d75935298d63eb6219e54c12024c5db7: goto eb106e0af992a78dd77fab1123af5867; goto C73c3ed7536323e8977fb238be266930; d0f586fb2f18de4f63d7eac6b82d3751: $Cd4eabf7ecf553f46c17f0bd5a382c46[$c72d66b481d02f854f0bef67db92a547[$Ba405126142f0dfc9dbf39063b8e03f0]] = $c72d66b481d02f854f0bef67db92a547; goto d75935298d63eb6219e54c12024c5db7; Fb74fceaff2dfebeedd514fdab459d95: cd24d6ea8374bcfc3d627dd670829176: goto Cf9a73782a5e2fce3e34dd54b487f50f; ab3463b3cc2d9508a7fbe0181d48b697: $Cd4eabf7ecf553f46c17f0bd5a382c46[] = $c72d66b481d02f854f0bef67db92a547; goto a6fe4803eeb9a2065e9aa309acd66109; a6fe4803eeb9a2065e9aa309acd66109: goto Bfd7fa582fd6301cd0c819aa48bbc688; goto fc28b2a576425ec2d54a8b9a87bc892e; Ea1ce61960946c024a456a6df8d5ad38: $Cd4eabf7ecf553f46c17f0bd5a382c46[$c72d66b481d02f854f0bef67db92a547[$Ba405126142f0dfc9dbf39063b8e03f0]][] = $c72d66b481d02f854f0bef67db92a547; goto Af16dfc318a2fa3b3aed50a60fc42d17; D782c7a4b5f6a9a39e5cab45dbd98ae0: eb106e0af992a78dd77fab1123af5867: goto Df70de21938ce8ff8fcc8e19e9f72926; eedac41382bcd5388c38d4359d1cdf93: c304785c86f87c9503cf9e3aece77e5f: goto ab5d0cdaa73f638e8a6a329b44a2b002; f58cf93de4ca0d12823408d5095ce185: if (isset($Cd4eabf7ecf553f46c17f0bd5a382c46[$c72d66b481d02f854f0bef67db92a547[$Ba405126142f0dfc9dbf39063b8e03f0]])) { goto c304785c86f87c9503cf9e3aece77e5f; } goto d8cfe53c8a246a2d4ff0e8278fcd3cc0; ceed5282b12d2b8008a12b27679b74e7: if (!($this->d1E5ce3b87bb868b9E6eFd39AA355A4F() > 0)) { goto Fdf8f732442f344d5925f71f1931e7b6; } goto A0f3ff28fcacd9c44760cf79b9cdcd79; B5fb655b4060940404394e686a44de8c: goto e3988826b887ae0e6e46fbfa14b3f173; goto D585d9fc6d16202f0d912a47097e7740; C73c3ed7536323e8977fb238be266930: Cff2266e2d1c4c805ad6a523959be10a: goto a2284e377f131c6d1bee36a9a761c574; A0f3ff28fcacd9c44760cf79b9cdcd79: e3988826b887ae0e6e46fbfa14b3f173: goto D086139d99efc88b4893074996f05e6c; fc28b2a576425ec2d54a8b9a87bc892e: d39da7a1b2fdb19c8ff6a84daea860d1: goto f58cf93de4ca0d12823408d5095ce185; fa18c59286428ae6f8eadd514ab54844: bef503f92e4028d0083cc3a56d4e70fb: goto D49c1d378db34e04bdaa4bd5a8a73299; D086139d99efc88b4893074996f05e6c: if (!($c72d66b481d02f854f0bef67db92a547 = mysqli_fetch_array($this->result, MYSQLI_ASSOC))) { goto A9e286b3e3983352f9ff5becbec84ed8; } goto fddc7cee5cd337aaffbadbc209f87076; D49c1d378db34e04bdaa4bd5a8a73299: return false; goto A90dbd89eb19573aebc11eb2e2dc070b; Db3ba32ba92c9e90a47a251b90f6a6ba: $Cd4eabf7ecf553f46c17f0bd5a382c46 = array(); goto ceed5282b12d2b8008a12b27679b74e7; Df70de21938ce8ff8fcc8e19e9f72926: Bfd7fa582fd6301cd0c819aa48bbc688: goto B5fb655b4060940404394e686a44de8c; c681835a113847ddddb7959aadd2956d: mysqli_free_result($this->result); goto C4080da1c8d4faed569db47e9e80b76c; Ee2914841c226a8e9539025ece62021b: Fdf8f732442f344d5925f71f1931e7b6: goto c681835a113847ddddb7959aadd2956d; C4080da1c8d4faed569db47e9e80b76c: return $Cd4eabf7ecf553f46c17f0bd5a382c46; goto fa18c59286428ae6f8eadd514ab54844; d8cfe53c8a246a2d4ff0e8278fcd3cc0: $Cd4eabf7ecf553f46c17f0bd5a382c46[$c72d66b481d02f854f0bef67db92a547[$Ba405126142f0dfc9dbf39063b8e03f0]] = array(); goto eedac41382bcd5388c38d4359d1cdf93; F517e50d68da24a50f3e983ffd421213: eff792a8c21925a70519463fc81f638e: goto D782c7a4b5f6a9a39e5cab45dbd98ae0; A90dbd89eb19573aebc11eb2e2dc070b: } public function f1Ed191d78470660edFf4a007696bc1F() { goto F49329917972a6a48cfb1b1ee4e81ed0; bf44aa894586b4acf336398dc9bf7b8a: return $c72d66b481d02f854f0bef67db92a547; goto A0d0072a7b9d17a29a551e48d67ca288; f28358aac0c199153794db39306a19b9: if (!($this->d1E5Ce3b87Bb868b9e6EFD39aa355A4F() > 0)) { goto Ce3310d3ae9e7245600834f20687e69a; } goto A6f28578f6658d3ccabfecfed260c810; E9c26508e427e151d82cce02549d0af8: mysqli_free_result($this->result); goto bf44aa894586b4acf336398dc9bf7b8a; A6f28578f6658d3ccabfecfed260c810: $c72d66b481d02f854f0bef67db92a547 = mysqli_fetch_array($this->result, MYSQLI_ASSOC); goto bf25440d9cece5083b651c5aeb4ecd35; F49329917972a6a48cfb1b1ee4e81ed0: if (!($this->dbh && $this->result)) { goto Cb2b863ba5449627ac6b9bebe525b9c1; } goto b921ed4500576798c36c03c926461cb4; b921ed4500576798c36c03c926461cb4: $c72d66b481d02f854f0bef67db92a547 = array(); goto f28358aac0c199153794db39306a19b9; bf25440d9cece5083b651c5aeb4ecd35: Ce3310d3ae9e7245600834f20687e69a: goto E9c26508e427e151d82cce02549d0af8; A0d0072a7b9d17a29a551e48d67ca288: Cb2b863ba5449627ac6b9bebe525b9c1: goto acf7d64915ea0a1d04d58cdc41a61412; acf7d64915ea0a1d04d58cdc41a61412: return false; goto A6077073cce318f7c57b5de0a98d3e18; A6077073cce318f7c57b5de0a98d3e18: } public function b98CE8B3899E362093173CC5EB4146b9() { goto Db1054129b6759b50ca21ee81294c101; Ab9f73cf5ba24e9d1855d01a41eb57ee: $c72d66b481d02f854f0bef67db92a547 = $c72d66b481d02f854f0bef67db92a547[0]; goto e65e522ceffb88c947be84323d8b4622; F31347b49be07eef86767b46e08c105e: $c72d66b481d02f854f0bef67db92a547 = false; goto Eba01905e41319b3d981187ab96d848d; e65e522ceffb88c947be84323d8b4622: ac328ab33eec70cd683cad1c13f5a57e: goto fe6e9576eebd9d1e292e0b400714a27d; Db1054129b6759b50ca21ee81294c101: if (!($this->dbh && $this->result)) { goto Ab7a409c20baba5204ab8bc47c90731e; } goto F31347b49be07eef86767b46e08c105e; ed04e03d46282b3ac9af1a816f4429f5: Ab7a409c20baba5204ab8bc47c90731e: goto ca7795a2318b0a6a34359065f5a662d5; ca7795a2318b0a6a34359065f5a662d5: return false; goto cc009c655919f71db9499448f6e0e358; fe6e9576eebd9d1e292e0b400714a27d: mysqli_free_result($this->result); goto cef5dd8c125ca01f5c1b17b119770e7e; A75f066f6aa3c3e262307c48c023c099: $c72d66b481d02f854f0bef67db92a547 = mysqli_fetch_array($this->result, MYSQLI_NUM); goto Ab9f73cf5ba24e9d1855d01a41eb57ee; cef5dd8c125ca01f5c1b17b119770e7e: return $c72d66b481d02f854f0bef67db92a547; goto ed04e03d46282b3ac9af1a816f4429f5; Eba01905e41319b3d981187ab96d848d: if (!($this->d1E5ce3b87Bb868B9E6EfD39Aa355A4f() > 0)) { goto ac328ab33eec70cd683cad1c13f5a57e; } goto A75f066f6aa3c3e262307c48c023c099; cc009c655919f71db9499448f6e0e358: } public function E872be457a7f493D774179c6bdF95B46() { $Aca1086fdec6d6d95b8fcf9874828bbd = mysqli_affected_rows($this->dbh); return empty($Aca1086fdec6d6d95b8fcf9874828bbd) ? 0 : $Aca1086fdec6d6d95b8fcf9874828bbd; } public function FC53e22aE7Ee3Bb881cd95fb606914F0($b0f1eb357ed72245e03dfe6268912497) { goto abbfd8a1f594d958f3d172e3b0da7dd5; abbfd8a1f594d958f3d172e3b0da7dd5: $this->cc637BCb0B74b82beBC2776607E73bED(); goto c03df3aba3841c507f11dbd42c4e4624; e67a85e4f936956cd6c7a947b9df88ba: a78bf8D35765BE2408c50712CE7a43Ad::E501281ad19Af8A4Bbbf9bED91ee9299("\x4d\x79\x53\121\x4c\40\x51\165\145\162\x79\40\106\141\151\x6c\x65\144\x20\x5b" . $b0f1eb357ed72245e03dfe6268912497 . "\x5d\x3a\x20" . mysqli_error($this->dbh)); goto D68d8cd5e9321dd85ad49e131fb3cdea; d6b14d70da7c33a2d2372805569d2b44: if ($this->result) { goto e3478e05cb539ad3eccc17300221bfd5; } goto e67a85e4f936956cd6c7a947b9df88ba; c03df3aba3841c507f11dbd42c4e4624: $this->result = mysqli_query($this->dbh, $b0f1eb357ed72245e03dfe6268912497); goto d6b14d70da7c33a2d2372805569d2b44; Fa11b7afac37648c5230a2b8035d6e44: return true; goto a4ee8c8bd28d102c43c82b1d96a42399; D68d8cd5e9321dd85ad49e131fb3cdea: return false; goto D808e178c4ed39c14777cc506ed806b2; D808e178c4ed39c14777cc506ed806b2: e3478e05cb539ad3eccc17300221bfd5: goto Fa11b7afac37648c5230a2b8035d6e44; a4ee8c8bd28d102c43c82b1d96a42399: } public function escape($F999d6c638356ee8a5d971e3eabf821a) { $this->cc637bCb0b74B82bEBc2776607e73beD(); return mysqli_real_escape_string($this->dbh, $F999d6c638356ee8a5d971e3eabf821a); } public function cB6eeD7307EC2a13aE58F83987d0629f() { $Dd875708f3436837199ecc6210211f1d = mysqli_num_fields($this->result); return empty($Dd875708f3436837199ecc6210211f1d) ? 0 : $Dd875708f3436837199ecc6210211f1d; } public function bEb8A0bba80A0133a23fE13d34Dc94d6() { $c56e7d2361269a789b7e90324217084b = mysqli_insert_id($this->dbh); return empty($c56e7d2361269a789b7e90324217084b) ? 0 : $c56e7d2361269a789b7e90324217084b; } public function d1E5cE3B87bb868B9e6efd39Aa355A4F() { $A1b53d06894cd6b024ae321063e5a015 = mysqli_num_rows($this->result); return empty($A1b53d06894cd6b024ae321063e5a015) ? 0 : $A1b53d06894cd6b024ae321063e5a015; } } ?>