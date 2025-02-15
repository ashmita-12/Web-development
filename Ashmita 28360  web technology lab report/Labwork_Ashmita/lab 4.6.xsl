<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Book Lists</title>
            </head>
            <body>
                <h2>Book List</h2>
                <table border="1">
                    <tr>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Publisher</th>
                        <th>Year</th>
                    </tr>
                    <xsl:for-each select="books/book">
                        <tr>
                            <td><xsl:value-of select="title"/></td>
                            <td><xsl:value-of select="location"/></td>
                            <td><xsl:value-of select="publisher"/></td>
                            <td><xsl:value-of select="year"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
