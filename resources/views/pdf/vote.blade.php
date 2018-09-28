<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
        
        body {
            font-family: 'DejaVu Sans';
            font-size:10px;
            padding:0;
            margin:0;
            line-height:1.1;
        }

        .center {
            text-align:center;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        table td, table th {
            text-align:center;
            font-size:8px;
            border:1px solid #000;
            padding:0;
            margin:0;
        }

        .owner-name {
            text-transform: uppercase;
        }

        .sign {
            display:inline-block;
            width:70px;
           
        }
        .text-align-right {
            text-align:right;
        }
        
    </style>
</head>
<body>
    <h4 class="center">BUTŲ IR KITŲ PATALPŲ SAVININKŲ KARTOTINIO BALSAVIMO RAŠTU DĖL ADMINISTRATORIAUS PASIRINKIMO BIULETENIS</h4>
    <ol>
        <li>Daugiabučio namo adresas: <strong>{{$address}}</strong></li>
        <li>Buto ir kitos patalpos savininko vardas, pavardė, juridinio asmens pavadinimas: <strong>{{$owner_name}}</strong></li>
        <li>Buto ir/ar patalpos numeris (arba patalpos unikalus numeris) Nekilnojamojo turto registre:<strong>{{$house_nr}} {{(!empty($unique_code)? ', '.$unique_code : '' )}}</strong></li>
        <li>Svarstomas klausimas: <strong>{{$question}}</strong></li>
        <li>Pažymėkite <strong>X</strong> žymėjimo vietoje Jūsų pasirinktą pretendentą:</li>
    </ol>
        <table>
          <tr>
            <td rowspan="2" width="15">Eil. Nr.</td>
            <td width="30">Žymėjimo vieta</td>
            <td rowspan="2" width="150">Pretendentų teikti administravimo paslaugas pavadinimas, juridinė forma</td>
            <td width="50" rowspan="2">Administravimo patirtis nuo (m.)</td>
            <td colspan="3">Pretendentų siūlomas administravimo paslaugų tarifas, Eur/m2 (su PVM) atsižvelgiant į daugiabučio namo naudingą plotą</td>
            <td width="150" rowspan="2"><strong>Kita informacija</strong> (Pretendentų buveinės adresas ir tel. Nr.)</td>
          </tr>
          <tr>
            <th>X</th>
            <th width="50">iki 1000 m2</th>
            <th width="50">nuo 1000 iki 3000 m2</th>
            <th width="50">nuo 3000 m2</th>
          </tr>
          <tr>
              <td>1.</td>
              <td></td>
              <td>„Admi“, UAB</td>
              <td>2007</td>
              <td>0,042</td>
              <td>0,040</td>
              <td>0,039</td>
              <td>Vydūno g. 17; (85) 2001125</td>
          </tr>
          <tr>
              <td>2.</td>
              <td></td>
              <td>„Adminsta“, UAB</td>
              <td>2002</td>
              <td>0,029</td>
              <td>0,029</td>
              <td>0,029</td>
              <td>S. Žukausko g. 39; (85) 2788402</td>
          </tr>
          <tr>
              <td>3.</td>
              <td></td>
              <td>„Antakalnio būstas“, UAB</td>
              <td>1992</td>
              <td>0,0434</td>
              <td>0,0434</td>
              <td>0,0434</td>
              <td>Ozo g. 12A-1; 870055966</td>
          </tr>
          <tr>
              <td>4.</td>
              <td></td>
              <td>„AUPAIRA“, L. Šukio PĮ</td>
              <td>2010</td>
              <td>0,04</td>
              <td>0,04</td>
              <td>0,04</td>
              <td>B. Dvariono g. 23; 865280005</td>
          </tr>
          <tr>
              <td>5.</td>
              <td></td>
              <td>„Būsto renovacijos agentūra“, UAB</td>
              <td>2007</td>
              <td>0,04</td>
              <td>0,028</td>
              <td>0,023</td>
              <td>Smolensko g. 10B; (85) 2779183</td>
          </tr>
          <tr>
              <td>6.</td>
              <td></td>
              <td>„Būsto švara“, UAB</td>
              <td>1993</td>
              <td>0,0405</td>
              <td>0,0319</td>
              <td>0,0232</td>
              <td>T. Ševčenkos g. 16A; 865670013</td>
          </tr>
          <tr>
              <td>7.</td>
              <td></td>
              <td>„Būsto valda“, UAB</td>
              <td>1990</td>
              <td>0,0199</td>
              <td>0,0169</td>
              <td>0,0149</td>
              <td>Chemijos g. 11, Kaunas; 870055188</td>
          </tr>
          <tr>
              <td>8.</td>
              <td></td>
              <td>„Castrade Service“, UAB</td>
              <td>2012</td>
              <td>0,043</td>
              <td>0,040</td>
              <td>0,037</td>
              <td>Perkūnkiemio g. 47-106; 8652316378</td>
          </tr>
          <tr>
              <td>9.</td>
              <td></td>
              <td>„Corpus A“, UAB</td>
              <td>1999</td>
              <td>0,043</td>
              <td>0,035</td>
              <td>0,03</td>
              <td>Gabijos g. 52; 870033390</td>
          </tr>
          <tr>
              <td>10.</td>
              <td></td>
              <td>„Debreceno valda“, UAB</td>
              <td>1992</td>
              <td>0,033</td>
              <td>0,03</td>
              <td>0,028</td>
              <td>Danės g. 5-41, Klaipėda; 870055188</td>
          </tr>
          <tr>
                <td>
                11.
                </td>
                <td>
        
                </td>
                <td>
                &bdquo;Devilmora&ldquo;, IĮ
                </td>
                <td>
                2008
                </td>
                <td>
                0,03
                </td>
                <td >
                0,03
                </td>
                <td >
                0,025
                </td>
                <td >
                Totorių g. 22-10; 868779833
                </td>
                </tr>
                <tr>
                <td >
                12.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Dominus projektai&ldquo;, UAB
                </td>
                <td >
                2012
                </td>
                <td >
                0,04
                </td>
                <td >
                0,04
                </td>
                <td >
                0,04
                </td>
                <td >
                Bangų g. 11, Klaipėda; 868556677
                </td>
                </tr>
                <tr>
                <td >
                13.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Domus service&ldquo;, UAB
                </td>
                <td >
                2005
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0242
                </td>
                <td >
                0,0229
                </td>
                <td >
                Buivydi&scaron;kių g. 118; 870044969
                </td>
                </tr>
                <tr>
                <td >
                14.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Domus tersus&ldquo;, UAB
                </td>
                <td >
                2017
                </td>
                <td >
                0,04
                </td>
                <td >
                0,04
                </td>
                <td >
                0,04
                </td>
                <td >
                Girulių g. 10; 864066216
                </td>
                </tr>
                <tr>
                <td >
                15.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Eko Balt&ldquo;, UAB
                </td>
                <td >
                2010
                </td>
                <td >
                0,009
                </td>
                <td >
                0,009
                </td>
                <td >
                0,009
                </td>
                <td >
                P. Luk&scaron;io g. 16-247; 861861184
                </td>
                </tr>
                <tr>
                <td >
                16.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Fabeta&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,038
                </td>
                <td >
                0,0389
                </td>
                <td >
                0,0398
                </td>
                <td >
                S. Stanevičiaus g. 24; (85) 2484112
                </td>
                </tr>
                <tr>
                <td >
                17.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Inservis&ldquo;, UAB
                </td>
                <td >
                2004
                </td>
                <td >
                0,039
                </td>
                <td >
                0,030
                </td>
                <td >
                0,027
                </td>
                <td >
                A. Juozapavičiaus g. 6; (85) 2736607
                </td>
                </tr>
                <tr>
                <td >
                18.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Jurita&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,039
                </td>
                <td >
                0,035
                </td>
                <td >
                0,035
                </td>
                <td >
                Justini&scaron;kių g. 62A; (85) 2426518
                </td>
                </tr>
                <tr>
                <td >
                19.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Justini&scaron;kių būstas&ldquo;, UAB
                </td>
                <td >
                1991
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                Ozo g. 12A-1; 870055966
                </td>
                </tr>
                <tr>
                <td >
                20.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Karolini&scaron;kių būstas&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                Ozo g. 12A-1; 870055966
                </td>
                </tr>
                <tr>
                <td >
                21.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Lazdynų butų ūkis&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,0333
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                Ozo g. 12A-1; 870055966
                </td>
                </tr>
                <tr>
                <td >
                22.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Max Service&ldquo;, UAB
                </td>
                <td >
                2010
                </td>
                <td >
                0,026
                </td>
                <td >
                0,025
                </td>
                <td >
                0,024
                </td>
                <td >
                Laisvės pr. 60; (85) 2050607
                </td>
                </tr>
                <tr>
                <td >
                23.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Merlangas&ldquo;, UAB
                </td>
                <td >
                1993
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                Beržų g. 10, Panevėžys; 845432216
                </td>
                </tr>
                <tr>
                <td >
                24.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Miesto butų ūkis&ldquo;, UAB
                </td>
                <td >
                -
                </td>
                <td >
                0,008
                </td>
                <td >
                0,008
                </td>
                <td >
                0,008
                </td>
                <td >
                Studentų g. 43-101; 867522989
                </td>
                </tr>
                <tr>
                <td >
                25.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Namų auditas&ldquo;, UAB
                </td>
                <td >
                2014
                </td>
                <td >
                0,039
                </td>
                <td >
                0,035
                </td>
                <td >
                0,034
                </td>
                <td >
                Ukmergės g. 222; 868562444
                </td>
                </tr>
                <tr>
                <td >
                26.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Namų priežiūros centras&ldquo;, UAB
                </td>
                <td >
                2001
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0430
                </td>
                <td >
                Ozo g. 12A-1; 870055966
                </td>
                </tr>
                <tr>
                <td >
                27.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Namų ūkis&ldquo;, UAB
                </td>
                <td >
                2011
                </td>
                <td >
                0,03
                </td>
                <td >
                0,025
                </td>
                <td >
                0,02
                </td>
                <td >
                S. Moniu&scaron;kos g. 50-4; 868674305
                </td>
                </tr>
                <tr>
                <td >
                28.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Naujamiesčio būstas&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                Ozo g. 12A-1; 870055966
                </td>
                </tr>
                <tr>
                <td >
                29.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Naujininkų ūkis&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,0337
                </td>
                <td >
                0,0376
                </td>
                <td >
                0,0378
                </td>
                <td >
                &Scaron;vitrigailos g. 16; (85) 2330550
                </td>
                </tr>
                <tr>
                <td >
                30.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Naujoji Pilaitė&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,042
                </td>
                <td >
                0,042
                </td>
                <td >
                0,042
                </td>
                <td >
                Vydūno g. 17; (85) 2307949
                </td>
                </tr>
                <tr>
                <td >
                31.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Orenus&ldquo;, UAB
                </td>
                <td >
                2016
                </td>
                <td >
                0,01
                </td>
                <td >
                0,01
                </td>
                <td >
                0,01
                </td>
                <td >
                Dariaus ir Girėno g. 28; 864038555
                </td>
                </tr>
                <tr>
                <td >
                32.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Ozo miestas&ldquo;, UAB
                </td>
                <td >
                2005
                </td>
                <td >
                0,034
                </td>
                <td >
                0,027
                </td>
                <td >
                0,022
                </td>
                <td >
                Klaipėdos g. 1; 870055188
                </td>
                </tr>
                <tr>
                <td >
                33.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Pastatų ūkio valdymas&ldquo;, UAB
                </td>
                <td >
                2013
                </td>
                <td >
                0,038
                </td>
                <td >
                0,029
                </td>
                <td >
                0,023
                </td>
                <td >
                Dariaus ir Girėno g. 20; (85) 2132415
                </td>
                </tr>
                <tr>
                <td >
                34.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Pa&scaron;ilaičių būstas&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                Ozo g. 12A-1; 870055966
                </td>
                </tr>
                <tr>
                <td >
                35.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Priemiestis&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,03
                </td>
                <td >
                0,035
                </td>
                <td >
                0,035
                </td>
                <td >
                Stepono Batoro g. 41; (85) 2670204
                </td>
                </tr>
                <tr>
                <td >
                36.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Rasų valda&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,039
                </td>
                <td >
                0,0434
                </td>
                <td >
                Naujininkų g. 5; (85) 2162057
                </td>
                </tr>
                <tr>
                <td >
                37.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Santermita&ldquo;, UAB
                </td>
                <td >
                2003
                </td>
                <td >
                0,02
                </td>
                <td >
                0,018
                </td>
                <td >
                0,015
                </td>
                <td >
                Skuodo g. 2F, Kaunas; 865595253
                </td>
                </tr>
                <tr>
                <td >
                38.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Senamiesčio ūkis&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,035
                </td>
                <td >
                0,033
                </td>
                <td >
                0,029
                </td>
                <td >
                Klaipėdos g. 1; (85) 2611695
                </td>
                </tr>
                <tr>
                <td >
                39.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Servico&ldquo;, UAB
                </td>
                <td >
                2010
                </td>
                <td >
                0,034
                </td>
                <td >
                0,029
                </td>
                <td >
                0,026
                </td>
                <td >
                Savanorių g. 193; (85) 2777333
                </td>
                </tr>
                <tr>
                <td >
                40.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;SRĖDĖ&ldquo; ir ko, UAB
                </td>
                <td >
                -
                </td>
                <td >
                0,025
                </td>
                <td >
                0,024
                </td>
                <td >
                0,023
                </td>
                <td >
                Kraki&scaron;kių g. 63; 867027250
                </td>
                </tr>
                <tr>
                <td >
                41.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;&Scaron;ilėja&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,035
                </td>
                <td >
                0,03
                </td>
                <td >
                0,029
                </td>
                <td >
                Ukmergės g. 222; (85) 2466644
                </td>
                </tr>
                <tr>
                <td >
                42.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Verkių būstas&ldquo;, UAB
                </td>
                <td >
                2012
                </td>
                <td >
                0,0388
                </td>
                <td >
                0,0406
                </td>
                <td >
                0,0411
                </td>
                <td >
                Ateities g. 10; (85) 2697777
                </td>
                </tr>
                <tr>
                <td >
                43.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Vilkpėdės būstas&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,0333
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                Ozo g. 12A-1; 870055966
                </td>
                </tr>
                <tr>
                <td >
                44.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Vir&scaron;uli&scaron;kių būstas&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                Ozo g. 12A-1; 870055966
                </td>
                </tr>
                <tr>
                <td >
                45.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Vitės valdos&ldquo;, UAB
                </td>
                <td >
                1991
                </td>
                <td >
                0,035
                </td>
                <td >
                0,032
                </td>
                <td >
                0,03
                </td>
                <td >
                Danės g. 5-41, Klaipėda; 870055188
                </td>
                </tr>
                <tr>
                <td >
                46.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                &bdquo;Žirmūnų būstas&ldquo;, UAB
                </td>
                <td >
                1992
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                0,0434
                </td>
                <td >
                Ozo g. 12A-1; 870055966
                </td>
                </tr>
                <tr>
                <td >
                47.
                </td>
                <td >
                &nbsp;
                </td>
                <td >
                Administravimo centras &bdquo;Vilnietis&ldquo;, UAB
                </td>
                <td >
                2018
                </td>
                <td >
                0,0089
                </td>
                <td >
                0,0089
                </td>
                <td >
                0,0089
                </td>
                <td >
                &Scaron;v. Stepono g. 7; 870055188
                </td>
                </tr>
        </table>
        <p>
            <strong>Buto ir kitos patalpos savininko ar jo įgalioto asmens, 
                juridinio asmens vadovo ar jo įgalioto atstovo vardas, pavardė, parašas ir 
                biuletenio užpildymo data: <span class="owner-name">{{$owner_name}}</span> {{date('Y-m-d', strtotime($created_at))}}
            </strong>
        </p>
        <span>7. Biuletenis turi būti grąžintas balsavimo organizatoriui iki 2018-10-29.</span>
        <span>8. Biuletenio grąžinimo būdai:</span>
        <span>8.1. pateikiant seniūnijai pagal teritoriją;</span>
        <span>8.2. išsiunčiant paštu adresu, Konstitucijos pr. 3, LT-09601, Vilnius;</span>
        <span>8.3. pateikiant Vilniaus miesto savivaldybei, Konstitucijos pr. 3 Vilnius;</span>
        <span>8.4. išsiunčiant užpildytą, pasirašytą ir nuskanuotą balsavimo raštu biuletenį el. paštu balsavimas@vilnius.lt</span>
        <span>9. Balsavimo organizatorius: Vilniaus miesto savivaldybės administracijos Miesto ūkio ir transporto departamento Būsto administravimo skyrius, Konstitucijos pr. 3, tel. (85) 211 2149, juta.kazlauskiene@vilnius.lt.</span>

        <p>Biuletenį įteikė (išsiuntė): <img class="sign" src="images/sign.jpg" /> Juta Kazlauskienė 2018-10-08.</p>
        <small style="float:left;">Informuojame, kad UAB „Grinda“ valdyba nusprendė nedalyvauti šiame procese.<span style="float:right;">DN-{{$id}}</span></small>
</html>