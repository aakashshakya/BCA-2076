<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
      <table border="1">
        <tr style="background-color: yellow;">
          <td>Name</td>
          <td>Address</td>
          <td>Contact Number</td>
          <td>College</td>
        </tr>
        <xsl:for-each select="students/student">       
        <tr>
          <td><xsl:value-of select="name" /></td>
          <td><xsl:value-of select="address" /></td>
          <td><xsl:value-of select="contact_number" /></td>
          <td><xsl:value-of select="college" /></td>
        </tr>
        </xsl:for-each>
      </table>
  </body>
</html>