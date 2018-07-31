<!doctype html>
 <html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Welcome to OpenShift</title></head>

<body>



<?php
      $midstate = array();
      $blocktemplate=0;




$midstate[0]=0xc022dc5f;
$midstate[1]=0x48274e98;
$midstate[2]=0x6e353555;
$midstate[3]=0x47bfc523;
$midstate[4]=0x4811a092;
$midstate[5]=0x207c9749;
$midstate[6]=0x7657c67e;
$midstate[7]=0x562a335c;
$bits_expo='17';
$bits_coef='0x7e578c';
$merkleroot='76dc896b48d682e80c6e96368649634e57742a1eeb171dd97c259ce0c6d6a757';
$mintime='d1b45d5a';
$bits='8c577e17';




      $nonce1 = '6e383500';
    //$nonce1 = 'fffffff0';
      $nonce2 = '0';

      $h = array();
      $h[0]=0x428a2f98; $h[1]=0x71374491; $h[2]=0xb5c0fbcf; $h[3]=0xe9b5dba5; $h[4]=0x3956c25b; $h[5]=0x59f111f1; $h[6]=0x923f82a4; $h[7]=0xab1c5ed5;
      $h[8]=0xd807aa98; $h[9]=0x12835b01; $h[10]=0x243185be; $h[11]=0x550c7dc3; $h[12]=0x72be5d74; $h[13]=0x80deb1fe; $h[14]=0x9bdc06a7; $h[15]=0xc19bf174;
      $h[16]=0xe49b69c1; $h[17]=0xefbe4786; $h[18]=0x0fc19dc6; $h[19]=0x240ca1cc; $h[20]=0x2de92c6f; $h[21]=0x4a7484aa; $h[22]=0x5cb0a9dc; $h[23]=0x76f988da;
      $h[24]=0x983e5152; $h[25]=0xa831c66d; $h[26]=0xb00327c8; $h[27]=0xbf597fc7; $h[28]=0xc6e00bf3; $h[29]=0xd5a79147; $h[30]=0x06ca6351; $h[31]=0x14292967;
      $h[32]=0x27b70a85; $h[33]=0x2e1b2138; $h[34]=0x4d2c6dfc; $h[35]=0x53380d13; $h[36]=0x650a7354; $h[37]=0x766a0abb; $h[38]=0x81c2c92e; $h[39]=0x92722c85;
      $h[40]=0xa2bfe8a1; $h[41]=0xa81a664b; $h[42]=0xc24b8b70; $h[43]=0xc76c51a3; $h[44]=0xd192e819; $h[45]=0xd6990624; $h[46]=0xf40e3585; $h[47]=0x106aa070;
      $h[48]=0x19a4c116; $h[49]=0x1e376c08; $h[50]=0x2748774c; $h[51]=0x34b0bcb5; $h[52]=0x391c0cb3; $h[53]=0x4ed8aa4a; $h[54]=0x5b9cca4f; $h[55]=0x682e6ff3;
      $h[56]=0x748f82ee; $h[57]=0x78a5636f; $h[58]=0x84c87814; $h[59]=0x8cc70208; $h[60]=0x90befffa; $h[61]=0xa4506ceb; $h[62]=0xbef9a3f7; $h[63]=0xc67178f2;
// OK until here.
      $m = array();
      $m[0] = hexdec(substr($merkleroot,-8,8));
      $m[1] = hexdec($mintime);
      $m[2] = hexdec($bits);
      $m[3] = hexdec($nonce1);
      $m[4] = 0x80000000;
      $m[5]=0;   $m[6]=0;   $m[7]=0;   $m[8]=0;   $m[9]=0;
      $m[10]=0;  $m[11]=0;  $m[12]=0;  $m[13]=0;  $m[14]=0;
      $m[15] = 0x00000280;
      for ($i=16; $i<18; $i++) { $m[$i]=(  (($m[$i-15]<<25| (($m[$i-15]>>7)&0x1ffffff) )^($m[$i-15]<<14| (($m[$i-15]>>18)&0x3fff) )^ (($m[$i-15]>>3)&0x1fffffff) )+$m[$i-7]+(($m[$i-2]<<15| (($m[$i-2]>>17)&0x7fff) )^($m[$i-2]<<13| (($m[$i-2]>>19)&0x1fff) )^ (($m[$i-2]>>10)&0x3fffff) )+$m[$i-16]  )&0xffffffff;   }
      for ($i=18; $i<64; $i++) { $m[$i]=0; }

      $mm = array();
      for ($i=0; $i<8; $i++) { $mm[$i]=0; }
      $mm[8]=0x80000000;  $mm[9]=0; $mm[10]=0; $mm[11]=0; $mm[12]=0; $mm[13]=0; $mm[14]=0;  $mm[15]=0x00000100;
      for ($i=16; $i<64; $i++) { $mm[$i]=0; }



      $midvalue0=$midstate[0];  $midvalue1=$midstate[1];  $midvalue2=$midstate[2];  $midvalue3=$midstate[3];
      $midvalue4=$midstate[4];  $midvalue5=$midstate[5];  $midvalue6=$midstate[6];  $midvalue7=$midstate[7];
// OK until here.

for ($i=0; $i<3; $i++) {
      $blocktemplate=(  $h[$i]+$midvalue7+($midvalue4&$midvalue5^~$midvalue4&$midvalue6)+(($midvalue4<<26| (($midvalue4>>6)&0x3ffffff) )^($midvalue4<<21| (($midvalue4>>11)&0x1fffff) )^($midvalue4<<7| (($midvalue4>>25)&0x7f) ))+$m[$i]  )&0xffffffff;
      $midvalue7=$midvalue6;
      $midvalue6=$midvalue5;
      $midvalue5=$midvalue4;
      $midvalue4=($midvalue3+$blocktemplate)&0xffffffff;
      $blocktemplate=(  $blocktemplate+(($midvalue0<<30| (($midvalue0>>2)&0x3fffffff) )^($midvalue0<<19| (($midvalue0>>13)&0x7ffff) )^($midvalue0<<10| (($midvalue0>>22)&0x3ff) ))+($midvalue0&$midvalue1^$midvalue0&$midvalue2^$midvalue1&$midvalue2)  )&0xffffffff;
      $midvalue3=$midvalue2;
      $midvalue2=$midvalue1;
      $midvalue1=$midvalue0;
      $midvalue0=$blocktemplate;
}
// OK until here.

do {
      $reg_a=$midvalue0;   $reg_b=$midvalue1;   $reg_c=$midvalue2;   $reg_d=$midvalue3;
      $reg_e=$midvalue4;   $reg_f=$midvalue5;   $reg_g=$midvalue6;   $reg_h=$midvalue7;
for ($i=3; $i<64; $i++) {
      if ($i>=18) { $m[$i]=(  (($m[$i-15]<<25| (($m[$i-15]>>7)&0x1ffffff) )^($m[$i-15]<<14| (($m[$i-15]>>18)&0x3fff) )^ (($m[$i-15]>>3)&0x1fffffff) )+$m[$i-7]+(($m[$i-2]<<15| (($m[$i-2]>>17)&0x7fff) )^($m[$i-2]<<13| (($m[$i-2]>>19)&0x1fff) )^ (($m[$i-2]>>10)&0x3fffff) )+$m[$i-16]  )&0xffffffff;   }
      $blocktemplate=(  $h[$i]+$reg_h+($reg_e&$reg_f^~$reg_e&$reg_g)+(($reg_e<<26| (($reg_e>>6)&0x3ffffff) )^($reg_e<<21| (($reg_e>>11)&0x1fffff) )^($reg_e<<7| (($reg_e>>25)&0x7f) ))+$m[$i]  )&0xffffffff;
      $reg_h=$reg_g;
      $reg_g=$reg_f;
      $reg_f=$reg_e;
      $reg_e=($reg_d+$blocktemplate)&0xffffffff;
      $blocktemplate=(  $blocktemplate+(($reg_a<<30| (($reg_a>>2)&0x3fffffff) )^($reg_a<<19| (($reg_a>>13)&0x7ffff) )^($reg_a<<10| (($reg_a>>22)&0x3ff) ))+($reg_a&$reg_b^$reg_a&$reg_c^$reg_b&$reg_c)  )&0xffffffff;
      $reg_d=$reg_c;
      $reg_c=$reg_b;
      $reg_b=$reg_a;
      $reg_a=$blocktemplate;
}


      $mm[0]=($reg_a+$midstate[0])&0xffffffff;   $mm[1]=($reg_b+$midstate[1])&0xffffffff;   $mm[2]=($reg_c+$midstate[2])&0xffffffff;   $mm[3]=($reg_d+$midstate[3])&0xffffffff;
      $mm[4]=($reg_e+$midstate[4])&0xffffffff;   $mm[5]=($reg_f+$midstate[5])&0xffffffff;   $mm[6]=($reg_g+$midstate[6])&0xffffffff;   $mm[7]=($reg_h+$midstate[7])&0xffffffff;

      $reg_a=0x6a09e667;   $reg_b=0xbb67ae85;   $reg_c=0x3c6ef372;   $reg_d=0xa54ff53a;
      $reg_e=0x510e527f;   $reg_f=0x9b05688c;   $reg_g=0x1f83d9ab;   $reg_h=0x5be0cd19;

for ($i=0; $i<64; $i++) {
      if ($i>=16) { $mm[$i]=(  (($mm[$i-15]<<25| (($mm[$i-15]>>7)&0x1ffffff) )^($mm[$i-15]<<14| (($mm[$i-15]>>18)&0x3fff) )^ (($mm[$i-15]>>3)&0x1fffffff) )+$mm[$i-7]+(($mm[$i-2]<<15| (($mm[$i-2]>>17)&0x7fff) )^($mm[$i-2]<<13| (($mm[$i-2]>>19)&0x1fff) )^ (($mm[$i-2]>>10)&0x3fffff) )+$mm[$i-16]  )&0xffffffff; }
      $blocktemplate=(  $h[$i]+$reg_h+($reg_e&$reg_f^~$reg_e&$reg_g)+(($reg_e<<26| (($reg_e>>6)&0x3ffffff) )^($reg_e<<21| (($reg_e>>11)&0x1fffff) )^($reg_e<<7| (($reg_e>>25)&0x7f) ))+$mm[$i]  )&0xffffffff;
      $reg_h=$reg_g;
      $reg_g=$reg_f;
      $reg_f=$reg_e;
      $reg_e=($reg_d+$blocktemplate)&0xffffffff;
      if ($i==60) {
        if (($reg_e+0x5be0cd19)&0xffffffff) {break}
      }
      if ($i==61) {
        if (($reg_e+0x1f83d9ab)&0xffffffff) {break}
      }
      if ($i==62) {
          $str=dechex($reg_e+0x9b05688c);
          if (substr($str,-2,2)!='00') {break}
          if (hexdec(substr($str,-4,2).substr($str,-6,2).substr($str,-8,2)) < hexdec($bits_coef)) {
            echo dechex($m[3]&0xffffffff);
            echo "<br>";
          //exit(0);
            break 2;
          }
          else {break}
      }
      $blocktemplate=(  $blocktemplate+(($reg_a<<30| (($reg_a>>2)&0x3fffffff) )^($reg_a<<19| (($reg_a>>13)&0x7ffff) )^($reg_a<<10| (($reg_a>>22)&0x3ff) ))+($reg_a&$reg_b^$reg_a&$reg_c^$reg_b&$reg_c)  )&0xffffffff;
      $reg_d=$reg_c;
      $reg_c=$reg_b;
      $reg_b=$reg_a;
      $reg_a=$blocktemplate;
}
      $m[3]=($m[3]+1)&0xffffffff;
  } while ( $m[3]!=hexdec($nonce2) );

      echo "DONE!<br>";
?>




</body>
</html>
