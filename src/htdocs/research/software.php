<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified: 03/21/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Software';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>

<p>USGS software for landslide assessments and modeling</p>
<nav class="jumplist">
  <a href="#scoops">Scoops3D</a>
  <a href="#slammer">SLAMMER</a>
  <a href="#trigrs">TRIGRS</a>
  <a href="#ptcount">PTCOUNT</a> 
  <a href="#janbugs">JanbuGS, BishopGS, and FelleniusGS</a>
</nav>

<hr/>
<h2 id="scoops">Scoops3D</h2>
  <p>Scoops3D is software to analyze three-dimensional slope stability throughout a digital landscape.</p>

  <h4>Scoops3D and Scoops3D-i (recommended)</h4>
  <p>Includes Scoops3D, Scoops3D-i, and Scoops3D manual</p>
  <ul>
  	<li> <a href="http://pubs.usgs.gov/tm/14/a01/downloads/tm14-a1_ReadMeScoops3D.txt"> ReadMe file  </a></li>
  	<li> <a href="http://pubs.usgs.gov/tm/14/a01/downloads/tm14-a1_Scoops3D_1.0win_installer.exe"> Windows install package </a></li>
  	<li> <a href="http://pubs.usgs.gov/tm/14/a01/downloads/tm14-a1_Scoops3D_1.0mac.dmg"> Mac install disk image </a></li>
  </ul>

  <h4>Scoops3D examples</h4>
  <p>Includes Scoops3D examples described in Chapter 7 of the Scoops3D manual</p>
  <ul>
  	<li><a href="http://pubs.usgs.gov/tm/14/a01/downloads/tm14-a1_Scoops3Dexamples_1.0.zip"> Examples folder </a></li>
  </ul>

  <h4>Scoops3D executable code</h4>
  <p>Compiled code for Scoops3D for use at command line.  Does not include Scoops3D-i</p>
  <ul>
  	<li> <a href="Scoops3D/Scoops3D_1.0win.exe"> 32-bit Windows Version </a></li>
  	<li> <a href="Scoops3D/Scoops3D_1.0win64.exe"> 64-bit Windows Version </a></li>
  	<li> <a href="Scoops3D/Scoops3D_1.0mac"> Mac Version (64-bit) </a></li>
  <!--	<li> <a href="Scoops3D/Scoops3D_1.0linux"> Linux Version (64-bit) </a></li>-->
  </ul>

  <h4>Scoops3D source code</h4>
  <ul>
  	<li><a href="Scoops3D/Scoops3D_1.0_f90.zip">Fortran 90 code for Scoops3D </a></li>
  </ul>

  <h4>Reports</h4>
  <ul class="referencelist">
  	<li>Reid, M.E., Christian, S.B., Brien, D.L., and Henderson, S.T., 2014, Scoops3D: Software to analyze three-dimensional slope stability throughout a digital landscape: <a href = "http://pubs.usgs.gov/tm/14/a01"  target="_blank"> U.S. Geological Survey Techniques and Methods, book 14, chap. A1 </a>.</li>
  </ul>

<hr/>
<h2 id="slammer">SLAMMER</h2>
  <p>SLAMMER is a Java program that facilitates performing a variety of sliding-block analyses to evaluate seismic slope performance</p>

  <h4>Reports</h4>
  <ul class="referencelist">
  	<li><a href="http://pubs.usgs.gov/tm/12b1/">Jibson, R. W., Rathje, E. M., Jibson, M. W., and Lee, Y. W., 2013, SLAMMER -- Seismic Land Movement Modeled using Earthquake Records: U.S. Geological Survey Techniques and Methods</a>, book 12, chap. B1, unpaged.</li>
  </ul>

  <hr/>
  <h2 id="trigrs">TRIGRS</h2>
  <p>A Fortran-90 Computer program for time-dependent slope stability in response to rainfall infiltration</p>

  <h4>Download latest version (v 2.0.06b, 23 Nov 2009)</h4>
  <ul>
  	<li><a href="TRIGRS/TRIGRS_PC.zip">PC Version - TRIGRS_PC.zip (836KB)</a></li>
  	<li><a href="TRIGRS/TRIGRS_Mac.zip">MAC Version - TRIGRS_Mac.zip (713KB)</a></li>
  </ul>

  <h4>Reports</h4>
  <ul class="referencelist">
  	<li>Baum, R. L., Godt, J.W., and Savage, W. Z., 2010, Estimating the timing and location of shallow rainfall-induced landslides using a model for transient, unsaturated infiltration: Journal of Geophysical Research, Earth Surface. v. 115, F03013, doi:10.1029/2009JF001321</li>
  	<li>Baum, R.L., Savage, W.Z., and Godt, J.W., 2008, TRIGRS - A Fortran program for transient rainfall infiltration and grid-based regional slope-stability analysis, version 2.0: <a href="http://pubs.usgs.gov/of/2008/1159/">U.S. Geological Survey Open-File Report, 2008-1159</a>, 75 p.</li>
  	<li>Savage, W.Z., Godt, J.W., and Baum, R.L., 2004, Modeling time-dependent aerial slope stability, in Lacerda, W.A., Erlich, M., Fontoura, S.A.B., and Sayao, A.S.F., eds., Landslides-evaluation and stabilization, Proceedings of the 9th International Symposium on Landslides: London, A.A. Balkema Publishers, v. 1, p. 23-36.</li>
  	<li>Savage, W.Z., Godt, J.W., and Baum, R.L., 2003, A model for spatially and temporally distributed shallow landslide initiation by rainfall infiltration, in Rickenmann, D. and Chen, C., eds., Debris-Flow Hazards Mitigation-Mechanics, Prediction, and Assessment: Rotterdam, Millpress (Proceedings of the 3rd International conference on Debris Flow Hazards, Davos, Switzerland, September 10-13, 2003), p. 179-187.</li>
  	<li>Baum, R.L., Savage, W.Z., and Godt, J.W., 2002, TRIGRS&mdash;A FORTRAN Program for Transient Rainfall Infiltration and Grid-Based Regional Slope-Stability Analysis: <a href="http://pubs.usgs.gov/of/2002/ofr-02-424" target="_blank">U.S. Geological Survey Open-File Report 02-0424</a>, 35 p., 2 appendices.</li>
  </ul>

<hr/>
<h2 id="ptcount">PTCOUNT</h2>
  <p>A Fortran-77 Computer Program to Calculate the Areal Distribution of Mapped Data Points Using Count-Circle Methodology</p>

  <h4>Reports</h4>
  <ul class="referencelist">
    <li>Savage, W.Z., Coe, J.A., Sweeney, R. E., 2001, PTCOUNT &mdash; A Fortran-77 computer program to calculate the areal distribution of mapped data points using count-circle methodology, <a href="http://pubs.usgs.gov/of/2001/ofr-01-0002/" target="_blank">U.S. Geological Survey Open File Report 01-0002</a>, 10 p.</li>
  </ul>

<hr/>
<h2 id="janbugs">JanbuGS, BishopGS, and FelleniusGS</h2>
  <p>Fortran-77 programs for limit-equilibrium slope-stability analysis</p>

  <h4>Reports</h4>
  <ul class="referencelist">
    <li>Baum, R.L., 2000, Computer Programs for Limit-Equilibrium Slope-Stability Analysis&mdash;FelleniusGS, BishopGS, and JanbuGS, <a href="http://pubs.usgs.gov/of/2000/ofr-00-0107/" target="_blank">U.S. Geological Survey Open-File Report 00-0107</a></li>
  </ul>
