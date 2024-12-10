<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" indent="yes"/>

    <xsl:template match="/">
        <html>
        <head>
            <title>Song List</title>
        </head>
        <body>
            <h1>List of Songs</h1>
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Singer</th>
                    <th>Composed By</th>
                    <th>Length</th>
                </tr>
                <xsl:for-each select="songs/song">
                    <tr>
                        <td><xsl:value-of select="name"/></td>
                        <td><xsl:value-of select="singer"/></td>
                        <td><xsl:value-of select="composedBy"/></td>
                        <td><xsl:value-of select="length"/></td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
