<tr>
    <td>
        <table class="footer" align="center" style="background-color: #dbe9f5;" width="100%" cellpadding="0" cellspacing="0"
            role="presentation">
            <tr>
                <td class="content-cell" align="center"
                    style="margin-top: 2px; margin-bottom: 4px; color: #60666d; font-size: 10px; width: 80%; line-height: 21px; font-family: sans-serif;">
                    {{ Illuminate\Mail\Markdown::parse($slot) }}
                </td>
            </tr>
        </table>
    </td>
</tr>
