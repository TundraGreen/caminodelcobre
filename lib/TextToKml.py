#!/usr/local/bin/python3
# 2015-07-11 W. Prescott

# >>> s = Template('$who likes $what')
# >>> s.substitute(who='tim', what='kung pao')
from math import floor, ceil, fabs, copysign


template = """    <Placemark>
      <styleUrl>#myWaypointStyle</styleUrl>
      <name><![CDATA[$name]]></name>
      <visibility>1</visibility>
      <description><![CDATA[
        <div id="desc-container" style="font-size: 12px; min-height: 100px; min-width: 350px">
          <div id="desc-section">
            Sequence number: $seqno
          </div>
          <div id="desc-summary" style="width: 100%; float:left;">
            <table border="0" style="width: 100%; margin: 8px 0">
              <tr>
                <td style="font-weight: bold; width: 150px;">
                  Coordinates:
                </td>
                <td style="width: 200px;">
                  WGS 84<br/>
                  $latdeg° $latmin' $latsec'' N<br/>
                  $londeg° $lonmin' $lonsec'' W
                </td>
              </tr>
              <tr>
                <td style="font-weight: bold; width: 150px;">
                  Elevation:
                </td>
                <td style="width: 200px;">
                  $elev m
                </td>
              </tr>
            </table>
          </div>
        </div>
      ]]></description>
      <Point>
        <coordinates>$londecdeg, $latdecdeg, $elev.</coordinates>
      </Point>
    </Placemark>
"""

header = """<kml xmlns="http://www.opengis.net/kml/2.2" xmlns:gx="http://www.google.com/kml/ext/2.2" xmlns:kml="http://www.opengis.net/kml/2.2" xmlns:atom="http://www.w3.org/2005/Atom">
	<Document>
		<name><![CDATA[Camino del Cobre]]></name>
		<Style id="myWaypointStyle">
      <IconStyle>
        <Icon>
          <href>http://www.easytrailsgps.com/wp-content/uploads/2012/05/waypoint.png</href>
        </Icon>
      </IconStyle>
		</Style>
"""
footer = """	</Document>
</kml>
"""

def fillInTemplate(template, seqno, name, latdecdeg, londecdeg, elev):
  placemark = template.replace('$seqno', seqno)
  placemark = placemark.replace('$name', name)

  elevstr = "%4.0f" % elev
  placemark = placemark.replace('$elev', elevstr)

  latdeg = floor(latdecdeg)
  latmin = floor((latdecdeg - latdeg)*60.)
  latsec = ((latdecdeg - latdeg)*60 - latmin)*60.
  latdecdegstr = "%9.6f" % latdecdeg
  latdegstr = "%2.0f" % latdeg
  latminstr = "%02.0f" % latmin
  latsecstr = "%05.2f" % latsec

  lonabsdeg = fabs(londecdeg)
  londeg = floor(lonabsdeg)
  lonmin = floor((lonabsdeg - londeg)*60.)
  lonsec = ((lonabsdeg - londeg)*60 - lonmin)*60.
  londeg = copysign(londeg, londecdeg)
  londecdegstr = "%11.6f" % londecdeg
  londegstr = "%4.0f" % londeg
  lonminstr = "%02.0f" % lonmin
  lonsecstr = "%05.2f" % lonsec

  placemark = placemark.replace('$latdecdeg', latdecdegstr)
  placemark = placemark.replace('$latdeg', latdegstr)
  placemark = placemark.replace('$latmin', latminstr)
  placemark = placemark.replace('$latsec', latsecstr)

  placemark = placemark.replace('$londecdeg', londecdegstr)
  placemark = placemark.replace('$londeg', londegstr)
  placemark = placemark.replace('$lonmin', lonminstr)
  placemark = placemark.replace('$lonsec', lonsecstr)
  print (placemark)

print (header)
fillInTemplate(template, '01', 'Creel train station', 27.75438, -107.634893, 2340)
fillInTemplate(template, '02', 'Highway bridge in Creel', 27.743488, -107.643543, 2324)
fillInTemplate(template, '03', 'Adobe house', 27.742904, -107.647314, 2340)
fillInTemplate(template, '04', 'Sanchez - Santa Elena', 27.716525, -107.678267, 2442)
fillInTemplate(template, '05', 'Recowata', 27.708892, -107.684341, 2450)
fillInTemplate(template, '06', 'Pipeline clear area', 27.702436, -107.688838, 2480)
fillInTemplate(template, '07', 'Pipeline - 77 crossing', 27.694353, -107.695621, 2451)
fillInTemplate(template, '08', 'Turn from pipeline', 27.696182, -107.701335, 2462)
fillInTemplate(template, '09', 'Path to 77 bridge', 27.692196, -107.71656, 2448)
fillInTemplate(template, '10', 'Highway 77 railroad bridge', 27.690123, -107.720119, 2442)
fillInTemplate(template, '11', 'San Elias', 27.687397, -107.724006, 2454)
fillInTemplate(template, '12', '77 crossing to High Road', 27.681117, -107.723681, 2448)
fillInTemplate(template, '13', 'High Road North end', 27.679138, -107.72108, 2439)
fillInTemplate(template, '14', 'High Road Saddle', 27.669453, -107.714405, 2509)
fillInTemplate(template, '15', 'High Road railroad cross 1', 27.654535, -107.722976, 2379)
fillInTemplate(template, '16', 'Wrong fork High Road', 27.654545, -107.724697, 2403)
fillInTemplate(template, '17', 'Switchback start', 27.653692, -107.735294, 2248)
fillInTemplate(template, '18', 'Path to final hill', 27.651403, -107.737028, 2285)
fillInTemplate(template, '19', 'Upper loop crossing', 27.653362, -107.738305, 2325)
fillInTemplate(template, '20', 'Top of final hill', 27.655126, -107.739437, 2335)
fillInTemplate(template, '21', 'Side trip: loop tunnel', 27.656037, -107.737357, 2344)
fillInTemplate(template, '22', 'High Road last RR crossing', 27.654826, -107.740867, 2317)
print (footer)

