<tr>
    <td>
        <table class="footer" align="center" style="background-color: #d4e6f5;" width="100%" cellpadding="0" cellspacing="0"
            role="presentation">
            <tr>
                <td class="content-cell" align="center"
                    style="margin: 2px auto; color: #60666d; font-size: 10px; width: 80%; font-family: arial;">
                    {{ Illuminate\Mail\Markdown::parse($slot) }}
                </td>
            </tr>
        </table>
    </td>
</tr>
