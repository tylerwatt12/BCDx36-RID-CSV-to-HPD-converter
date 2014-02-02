<h1>Instructions</h1>
<p>Edit the source code of this document to load the csv file, first column must be Name and second the RID</p>
<p>Copy and paste the output into your f_000000#.hpd file, after the DQKs_Status line</p>
<p>This script comes with absolutely no warranty. Back up your hpd's before continuing.</p>
<h2>Output</h2>
<pre>UnitIds			UnitName	RID	Off	Auto	LightColor	On				</pre>

				<?php
				$f = fopen("example.csv", "r");
				while (($line = fgetcsv($f)) !== false) {
				        echo '<pre>UnitIds			';
				        foreach ($line as $cell) {
				        		
				                echo htmlspecialchars($cell) .  '	';

				        }
				        echo 'Off	Auto	Blue	On</pre>';
				}
				fclose($f);
				?>