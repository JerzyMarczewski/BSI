<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output doctype-public="-//W3C//DTD XHTML 1.1//EN" doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd" encoding="ISO-8859-2" method="html"/>

  <xsl:template match="/">
    
    <html>
      <head>

      <STYLE>
            <!-- td{
              border: 1px solid red;
            } -->
        </STYLE>
      </head>

      <body style="margin:0;padding:0">
        <img src="./faktura.png" style="position: absolute; z-index:-1;"/>
        <table style="width:1137px;table-layout:fixed;border-collapse:collapse;">
          <tr style="height:30px">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="height:30px">
            <td colspan="34"></td>
            <td colspan="4"  style="text-align:center;vertical-align: bottom;"><xsl:value-of select="Dane/Faktura/Indeks"/></td>

          </tr>
          <tr>
            <td style="" colspan="40"></td>
            <td style="text-align:center" colspan="20"><xsl:value-of select="Dane/Faktura/Miejscowosc"/></td>
          </tr>
          <tr>
            <td colspan="26"></td>
            <td colspan="12"  style="text-align:center"><xsl:value-of select="Dane/Faktura/Numer"/></td>
          </tr>
          <tr style="height:50px;">
            <td colspan="39"></td>
            <td colspan="10" style="text-align:center"><xsl:value-of select="Dane/Faktura/DataWystawienia"/></td>
            <td colspan="11" style="text-align:center"><xsl:value-of select="Dane/Faktura/DataSprzedazy"/></td>
          </tr>
          <tr style="height:50px;">
            <td colspan="30" style="text-align:center;vertical-align: bottom;"><xsl:value-of select="Dane/Faktura/Sprzedawca/Nazwa"/></td>
            <td colspan="30" style="text-align:center;vertical-align: bottom;"><xsl:value-of select="Dane/Faktura/Nabywca/Nazwa"/></td>
          </tr>
          <tr style="height:40px;">
            <td colspan="30" style="text-align:center;vertical-align: bottom;"><xsl:value-of select="Dane/Faktura/Sprzedawca/Adres"/></td>
            <td colspan="30" style="text-align:center;vertical-align: bottom;"><xsl:value-of select="Dane/Faktura/Nabywca/Adres"/></td>
          </tr>
          <tr style="height:160px;">
            <td></td>
          </tr>

          <xsl:variable name="suma"/>
          <xsl:for-each select="Dane/Faktura/Uslugi/Usluga">
            <tr style="height:35px;">
              <td colspan="3"></td>
              <td colspan="21" style="text-align:center"><xsl:value-of select="Nazwa"/></td>
              <td colspan="2"></td>
              <td colspan="4"></td>
              <td colspan="6" style="text-align:center"><xsl:value-of select="Cena" /></td>
              <td colspan="8" style="text-align:center"><xsl:value-of select="Cena" /></td>
              <td colspan="2" ><xsl:value-of select="VAT"/></td>
              <td colspan="6"  style="text-align:center" ><xsl:value-of select="Cena * 0.23"/></td>
              <td colspan="7"  style="text-align:center" ><xsl:value-of select="Cena * 0.23 + Cena"/></td>
            </tr>
          </xsl:for-each>
          
        </table>
      </body>
 </html>

  </xsl:template>
</xsl:stylesheet>