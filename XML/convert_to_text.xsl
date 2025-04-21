<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <!-- Output text format instead of XML -->
    <xsl:output method="text"/>
    
    <!-- Template to match root element -->
    <xsl:template match="/">
        <xsl:text>Property Details:</xsl:text>
        <xsl:text>&#10;--------------------</xsl:text>
        
        <xsl:for-each select="properties/property">
            <xsl:text>&#10;Type: </xsl:text><xsl:value-of select="name"/>
            <xsl:text>&#10;Location: </xsl:text><xsl:value-of select="location"/>
            <xsl:text>&#10;Price: </xsl:text><xsl:value-of select="price"/>
            <xsl:text>&#10;Size: </xsl:text><xsl:value-of select="size"/>
            <xsl:text>&#10;--------------------</xsl:text>
        </xsl:for-each>
    </xsl:template>

</xsl:stylesheet>
