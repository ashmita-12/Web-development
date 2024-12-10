<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <!-- Output format declaration -->
    <xsl:output method="html" encoding="UTF-8" indent="yes"/>
    <!-- Template to match the root element -->
    <xsl:template match="/Books">
        <html>
            <head>
                <title>Book List</title>
                <style>
                    .book-box {
                        width: 45%;
                        margin: 20px;
                        padding: 20px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        background-color: #f9f9f9;
                        float: left;
                    }
                    .book-title {
                        font-weight: bold;
                        font-size: 18px;
                        margin-bottom: 10px;
                    }
                    .book-details {
                        margin-bottom: 8px;
                    }
                    .clear {
                        clear: both;
                    }
                </style>
            </head>
            <body>
                <h2>Book List</h2>
                
                <!-- Loop through each Book element -->
                <xsl:for-each select="Book">
                    <div class="book-box">
                        <div class="book-title">ISBN: <xsl:value-of select="@isbn"/></div>
                        
                        <div class="book-details">
                            <span>Name:</span>
                            <xsl:value-of select="Name/FirstName"/> 
                            <xsl:value-of select="Name/MiddleName"/> 
                            <xsl:value-of select="Name/LastName"/>
                        </div>       
                        <div class="book-details">
                            <span>Author(s):</span>
                            <xsl:for-each select="Author">
                                <xsl:value-of select="."/>
                                <!-- Separate authors with a comma if there are multiple -->
                                <xsl:if test="position() != last()">, </xsl:if>
                            </xsl:for-each>
                        </div>        
                        <div class="book-details">
                            <span>Page No:</span>
                            <xsl:value-of select="PageNo"/>
                        </div> 
                        <div class="book-details">
                            <span>Price:</span>
                            <xsl:value-of select="Price"/>
                        </div>
                    </div>
                </xsl:for-each>
                <!-- Clear floats -->
                <div class="clear"></div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
