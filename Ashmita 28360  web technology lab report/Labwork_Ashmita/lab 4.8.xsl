<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Library Book List</title>
                <style>
                    .book-box {
                        border: 1px solid #4CAF50;
                        padding: 15px;
                        margin: 10px;
                        width: 300px;
                        float: left;
                        background-color: #f9f9f9;
                    }
                    .book-title {
                        font-size: 18px;
                        font-weight: bold;
                        color: #4CAF50;
                    }
                    .book-detail {
                        margin-top: 5px;
                        font-size: 14px;
                    }
                </style>
            </head>
            <body>
                <h2>Library Book List</h2>
                <div class="library">
                    <xsl:for-each select="library/book">
                        <div class="book-box">
                            <div class="book-title">
                                <xsl:value-of select="title"/>
                            </div>
                            <div class="book-detail">
                                <strong>Location:</strong> <xsl:value-of select="location"/>
                            </div>
                            <div class="book-detail">
                                <strong>Publisher:</strong> <xsl:value-of select="publisher"/>
                            </div>
                            <div class="book-detail">
                                <strong>Year:</strong> <xsl:value-of select="year"/>
                            </div>
                        </div>
                    </xsl:for-each>
                </div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
