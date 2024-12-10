<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Library Book List</title>
                <link rel="stylesheet" type="text/css" href="style.css"/>
            </head>
            <body>
                <h2>Library Book List</h2>
                    <xsl:for-each select="contacts/contact">
                        <div>
                        <div id="red">
                            <span class="{name/@class}">
                                <xsl:value-of select="name"/>
                            </span>
                        </div>
                        <div id="green">
                            <address>
                                <xsl:value-of select="address"/>
                            </address>
                        </div>
                        <div id="green">
                            <city>
                                <xsl:value-of select="city"/>
                            </city>
                        </div>
                        <div id="blue">
                            <email>
                                <xsl:value-of select="email"/>
                            </email>
                        </div>
                        <div id="green">
                            <phone>
                                <xsl:value-of select="phone"/>
                            </phone>
                        </div>
                        </div>
                    <br />
                    </xsl:for-each>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
