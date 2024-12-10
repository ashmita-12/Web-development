<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" indent="yes"/>
    <xsl:template match="/">
     <html>
        <head>
            <title>Students Lists:</title>
        </head>
        <body>
            <h1>List of Students</h1>
        <xsl:for-each select="students/student">
        <div>
            <xsl:text>Name: </xsl:text>
            <xsl:value-of select="name"/>
            <xsl:text>, Address: </xsl:text>
            <xsl:value-of select="address"/>
            <xsl:text>, Roll no: </xsl:text>
            <xsl:value-of select="rollno"/>
            <xsl:text>&#10;</xsl:text> <!-- Newline -->
            </div>
        </xsl:for-each>
        </body>
      </html>     
    </xsl:template>
</xsl:stylesheet>


